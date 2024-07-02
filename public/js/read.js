class Read extends App {
    constructor() {
        super();
    }

    _novel() {
        this._api({
            url: "/api/chapter/read/" + $("input[name=slug]").val(),
            method: "GET",
            success: (item) => {
                $("#chapter").text(Math.ceil(item.chapter));
                $("#current-chapter").text(Math.ceil(item.chapter));
                $("#title").text(item.title);
                $("#status").text(item.status);
                $("#date-upload").text(this.format(item.created_at));
                $("#navbar-title").text(item.novel.title);
                $("#name-novel").text(item.novel.title);
                $("#content").html(item.content);
            },
        });
    }

    _run() {
        this._novel();
    }
}

const read = new Read();
read._run();
