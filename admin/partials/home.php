<style>
    @import url(https://fonts.googleapis.com/css?family=Montserrat);

    html,
    body {
        height: 100%;
        font-weight: 800;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial;
    }

    .container {
        height: 80%;
        align-items: center;
    }

    svg {
        display: block;
        font: 5.5em 'Montserrat';
        width: 960px;
        height: 300px;
        /* margin: 0 auto; */
    }

    .text-copy {
        fill: none;
        stroke: white;
        stroke-dasharray: 6% 29%;
        stroke-width: 5px;
        stroke-dashoffset: 0%;
        animation: stroke-offset 5.5s infinite linear;
    }

    .text-copy:nth-child(1) {
        stroke: #0033FF;
        animation-delay: -1;
    }

    .text-copy:nth-child(2) {
        stroke: #FF3333;
        animation-delay: -2s;
    }

    .text-copy:nth-child(3) {
        stroke: #FF99CC;
        animation-delay: -3s;
    }

    .text-copy:nth-child(4) {
        stroke: #FF99CC;
        animation-delay: -4s;
    }

    .text-copy:nth-child(5) {
        stroke: #FDB731;
        animation-delay: -5s;
    }

    @keyframes stroke-offset {
        100% {
            stroke-dashoffset: -35%;
        }
    }
</style>

<div class="container">
    <svg viewBox="0 0 960 300">
        <symbol id="s-text">
            <text text-anchor="middle" x="50%" y="80%">Welcome to Admin Page</text>
        </symbol>

        <g class="g-ants">
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
        </g>
    </svg>
</div>