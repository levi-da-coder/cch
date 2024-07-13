<style>
.tabs {
    width: 360px;
    /* height: 300px; */
    display: flex;
    justify-content: center;
    align-items: flex-end;
    position: fixed;
    bottom: 60px;
}

.tContainer {
    position: absolute;
    z-index: 11px;
    bottom: 10px;
}

.liquid {
    position: absolute;
    filter: contrast(25);
    width: 100%;
    background: #ffffff;
    overflow: hidden;
}

.liquid-tab {
    width: 100%;
    height: 70px;
    background: #000000;
    display: flex;
    justify-content: center;
    filter: blur(13px);
}

input {
    display: none;
}

label {
    cursor: pointer;
    z-index: 2;
    width: 20%;
    height: 70px;
    display: flex;
    position: relative;
    justify-content: center;
    align-items: center;
}

label .svg-inline--fa {
    width: 30px;
    height: 30px;
    color: #ffd300;
    position: absolute;
    font-size: 30px;
    z-index: 4;
    transition: 0.25s 0.12s cubic-bezier(0.18, -0.1, 0.8, 1.6);
}

.active {
    position: absolute;
    left: 25px;
    width: 75px;
    height: 30px;
    background: #ffffff;
    transition: 0.25s cubic-bezier(0.18, -0.1, 0.8, 1.6);
}

.bubble {
    position: absolute;
    width: 68px;
    height: 75px;
    background: #000000;
    top: -50px;
    left: 25px;
    margin: auto;
    z-index: 1;
    border-radius: 30%;
    transition: 0.25s cubic-bezier(0.18, -0.1, 0.8, 1.6);
}

input:checked+label {
    top: -45px;
}

#home:checked~.bubble,
#home:checked~div div .active {
    left: 25px;
}

#search:checked~.bubble,
#search:checked~div div .active {
    left: 24.5%;
}

#add:checked~.bubble,
#add:checked~div div .active {
    left: 44.5%;
}

#heart:checked~.bubble,
#heart:checked~div div .active {
    left: 64.5%;
}

#user:checked~.bubble,
#user:checked~div div .active {
    left: 84.5%;
}
</style>
<div class="tContainer">
    <div class="tabs">
        <input type="radio" name="tab" id="home" checked="checked">
        <label for="home">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-home fa-w-18 fa-7x">
                <path fill="currentColor"
                    d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
                </path>
            </svg> </label>
        <input type="radio" name="tab" id="search">
        <label for="search">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-7x">
                <path fill="currentColor"
                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"
                    class=""></path>
            </svg>
        </label>
        <input type="radio" name="tab" id="add">
        <label for="add">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus-circle" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                class="svg-inline--fa fa-plus-circle fa-w-16 fa-9x">
                <path fill="currentColor"
                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"
                    class=""></path>
            </svg>
        </label>
        <input type="radio" name="tab" id="heart">
        <label for="heart">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-heart fa-w-16 fa-9x">
                <path fill="currentColor"
                    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"
                    class=""></path>
            </svg>
        </label>
        <input type="radio" name="tab" id="user">
        <label for="user">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14 fa-9x">
                <path fill="currentColor"
                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                    class=""></path>
            </svg>
        </label>
        <div class="bubble"></div>
        <div class="liquid">
            <div class="liquid-tab">
                <span class="active"></span>
            </div>
        </div>
    </div>
</div>