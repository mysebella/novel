class Home extends App {
    constructor() {
        super();
    }

    _news() {
        this._api({
            url: "/api/news",
            method: "GET",
            success: (e) => {
                const newsController =
                    document.querySelector("#news-container");

                if (e === 404) {
                    newsController.innerHTML = `
                        <div style="padding: 20px 0px;" class="w-full grid place-items-center">
                            <img src="/img/404.png" style="width: 200px;"/>
                            <p>Berita Belum Tersedia</p>
                        </div>
                    `;
                }

                e.forEach((item) => {
                    const html = `
                                <li class="py-3 border-b border-gray-100 last:border-b-0 px-4 hover:bg-gray-100">
                                    <a href="/read/news/a">
                                        <div class="flex gap-3 mb-2 items-center">
                                            <p class="bg-danger px-2 text-white text-sm">${
                                                item.status
                                            }</p>
                                            <p class="opacity-40 text-sm">${this.format(
                                                item.created_at
                                            )}</p>
                                        </div>
                                        <p class="text-blue-500 line-clamp-2 text-md">${
                                            item.title
                                        }</p>
                                    </a>
                                </li>
                            `;

                    newsController.innerHTML += html;
                });
            },
        });
    }

    _ranking() {
        this._api({
            url: "/api/novel/ranking-novel",
            method: "GET",
            success: (e) => {
                const novelContainer = document.querySelector(
                    "#novel-recomendation-container"
                );

                if (e === 404) {
                    novelContainer.innerHTML = `
                        <div style="padding: 20px 0px;" class="w-full grid place-items-center">
                            <img src="/img/404.png" style="width: 200px;"/>
                            <p>Novel Belum Tersedia</p>
                        </div>
                    `;
                }

                e.forEach((item, index) => {
                    const html = `
                            <li class="py-3 border-b border-gray-100 last:border-b-0 hover:bg-gray-100 px-4">
                                <a href="/detail/${item.slug}">
                                    <div class="text-blue-500 line-clamp-1 flex gap-2 items-center">
                                        <svg class="mb-1" style="color: ${
                                            index == 0 ? "#facc15" : ""
                                        } ${index == 1 ? "#9ca3af" : ""} ${
                        index == 2 ? "#92400e" : ""
                    };" stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 256 256" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M239.75,90.81c0,.11,0,.21-.07.32L217,195a16,16,0,0,1-15.72,13H54.71A16,16,0,0,1,39,195L16.32,91.13c0-.11-.05-.21-.07-.32A16,16,0,0,1,44,77.39l33.67,36.29,35.8-80.29a1,1,0,0,0,0-.1,16,16,0,0,1,29.06,0,1,1,0,0,0,0,.1l35.8,80.29L212,77.39a16,16,0,0,1,27.71,13.42Z">
                                            </path>
                                        </svg>
                                        ${item.title}
                                    </div>
                                    <p class="text-sm text-black flex gap-2 items-center">End<span
                                            class="block h-1 w-1 rounded-full bg-gray-300"></span>
                                        <span class="opacity-50">${
                                            item.views
                                        } dilihat</span>
                                    </p>
                                </a>
                            </li>
                            `;

                    novelContainer.innerHTML += html;
                });
            },
        });
    }

    _update() {
        this._api({
            url: "/api/chapter/new-chapter",
            method: "GET",
            success: (e) => {
                const updateContainer = document.querySelector(
                    "#update-chapter-container"
                );

                if (e === 404) {
                    updateContainer.innerHTML = `
                        <div style="padding: 20px 0px;" class="w-full grid place-items-center">
                            <img src="/img/404.png" style="width: 200px;"/>
                            <p>Novel Belum Tersedia</p>
                        </div>
                    `;
                }

                e.forEach((item) => {
                    const html = `
                                <li class="py-3 border-b border-gray-100 last:border-b-0 hover:bg-gray-100 px-4">
                                    <a href="/read/${item.slug}">
                                        <div class="flex gap-3 mb-2 items-center">
                                            <p class="bg-success px-2 text-white text-sm capitalize">${
                                                item.status
                                            }</p>
                                            <p class="opacity-40 text-sm">${this.format(
                                                item.created_at
                                            )}</p>
                                        </div>
                                        <p class="text-blue-500 line-clamp-1">Chapter ${Math.ceil(
                                            item.chapter
                                        )} - ${item.title}</p>
                                        <p class="text-sm text-black flex gap-2 items-center">${
                                            item.novel.title
                                        }<span
                                                class="block h-1 w-1 rounded-full bg-gray-300"></span>
                                            <span class="opacity-50">Volume ${Math.ceil(
                                                item.volume
                                            )}</span>
                                        </p>
                                    </a>
                                </li>`;

                    updateContainer.innerHTML += html;
                });
            },
        });
    }

    _run() {
        this._ranking();
        this._update();
        this._news();
    }
}

const home = new Home();
home._run();
