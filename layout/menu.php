<title>Hide/show menu</title>
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    #sidebar {
        position: fixed;
        width: 200px;
        height: 100%;
        background: #151719;
        left: -200px;
        transition: all 500ms linear;
        z-index: 1;
    }

    #sidebar.active {
        left: 0px;
    }

    #sidebar ul li {
        color: rgba(230, 230, 230, 0.9);
        list-style: none;
        padding: 15px 10px;
        border-bottom: 1px solid rgba(100, 100, 100, 0.3);
    }

    #sidebar .toggle-btn {
        position: absolute;
        left: 230px;
        top: 20px;
    }

    #sidebar .toggle-btn span {
        display: block;
        width: 30px;
        height: 5px;
        background: #151719;
        margin: 5px 0px;

    }
</style>
<script type="text/javascript">
    function toggleSidebar() {
        document.getElementById("sidebar").classList.toggle('active');
    }
</script>
<body>
<div class="menu-bg">
    <div class="bg"></div>
    <div id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()"><a>
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="https://https://www.facebook.com/groups/392154725023563/">Facebook</a></li>
            <li><a href="#">Fanpage</a></li>
        </ul>
    </div>
</div>
