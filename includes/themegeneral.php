<div class="navBar" id="h" Style="text-align:center;">
    <div class="menuBar" onmouseover="changeColor()" onmouseout="defaultColor()"
        onclick="toggleButton(this), showMenu()">
        <div id="menuBar1"> </div>
        <div id="menuBar2"> </div>
        <div id="menuBar3"> </div>
    </div>
    <a href="/travel_and_transport">
        <div class="homeIcon"> <i class="fa fa-home"></i></div>
    </a>
    <div class="header">
    </div>
    <div onclick="toggleSearchBar(this), showSearchField()">
        <div class="searchBar" onclick="applyFocus()"><i class="fa fa-search"></i></div>
        <div class="closeIcon" onclick="clearFocus(),clearField()"><i class="fa fa-close"></i></div>
    </div>
    <div id="searchField">
        <form action="javascript:void(0)" method="post">
            <input id="search" type="text" placeholder="What you are looking for..." autocomplete="off"
                onkeyup="javascript:void(0)">
        </form>
    </div>
</div>
<div class="homeBar">
    <a id="img" href="/travel_and_transport">
        <p class="preventTextSelection" unselectable="on" onselectstart="return false;" onmousedown="return false;"><i
                class="fa fa-home"></i></p>
    </a>
    <a id="text" href="/travel_and_transport">
        <p class="preventTextSelection" unselectable="on" onselectstart="return false;" onmousedown="return false;">
            <span id="hFont">T</span>RAVEL<span id="hFont">A</span>ND<span id="hFont">T</span>RANSPORT<span
                id="com">.com</span>
        </p>
    </a>
</div>
<script>
function myFunction() {
    var w = window.innerWidth;
    var h = window.innerHeight;
    document.getElementById("demo").innerHTML = "Width: " + w + "<br>Height: " + h;
}
</script>
<div id="sideOverlay">
    <div id="sideBar" class="preventTextSelection" unselectable="on" onselectstart="return false;"
        onmousedown="return false;">
        <a href="\travel_and_transport"> HOME </a>
        <a href="\travel_and_transport\CRUD\route"> ROUTE </a>
        <a href="\travel_and_transport\CRUD\driver"> DRIVER </a>
        <a href="\travel_and_transport\CRUD\ticket"> TICKET </a>
        <a href="\travel_and_transport\CRUD\bus"> BUS </a>
    </div>
</div>
<div id="topOverlay">
    <!--	<div class="searchDropDownFullBackground">
	<div class="searchDropDownBackground">-->
    <div id="output"></div>
    <!--			</div>
	</div>-->
</div>
<script src="/travel_and_transport/includes/javascript/searchBar.js"></script>
<script src="/travel_and_transport/includes/javascript/menuBarIcon.js"></script>
<script src="/travel_and_transport/includes/javascript/backupImg.js"></script>