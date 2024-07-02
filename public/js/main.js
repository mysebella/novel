class App {
    constructor() {
        this.baseUrl = $("meta[name=base-url]").attr("content");
    }

    format(created_at) {
        const date = new Date(created_at);
        const year = date.getFullYear();
        const month = ("0" + (date.getMonth() + 1)).slice(-2);
        const day = ("0" + date.getDate()).slice(-2);
        let formattedDate = `${year}.${month}.${day}`;
        return formattedDate;
    }

    _api(params) {
        fetch(params.url, {
            method: this.baseUrl + params.method ? params.method : "GET",
            headers: {
                "Content-Type": "application/json",
            },
        }).then((response) => {
            params.success(
                response.status === 404 ? response.status : response.json()
            );
        });
    }

    _post() {}
}
