<?php include ($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/forms/route/insert.php");?> <div class="form"
    Style="width:100%">
    <div id="left" Style="width:36%;height:650px;padding:0px;">
        <p Style="margin-top:0px;text-align:center;font-size:70px;color: #ff4d4d;opacity:0.7;">R<br>O<br>U<br>T<br>E</p>
    </div>
    <div id="right" Style="width:64%;height:650px;">
        <form action="/travel_and_transport/forms/route/insert.php" method="post">
            <p> ROUTE: </p>
            <span> FROM <select name="routeFrom">
                    <option value="peshawar">PESHAWAR</option>
                    <option value="mardan">MARDAN</option>
                    <option value="sawabi">SAWABI</option>
                    <option value="tarnol">TARNOL</option>
                    <option value="islamabad">ISLAMABAD(CAPITAL)</option>
                    <option value="faisalabad">FAISALABAD</option>
                    <option value="taxila">TAXILA</option>
                    <option value="ghazi barod">GHAZI BAROD</option>
                    <option value="muzafarabad">MUZAFARABAD</option>
                    <option value="fateh jang">FATEH JANG</option>
                    <option value="multan">MULTAN</option>
                    <option value="lahore">LAHORE</option>
                    <option value="karachi">KARACHI</option>
                </select>
                <span> TO </span>
                <select name="routeTo">
                    <option value="peshawar">PESHAWAR</option>
                    <option value="mardan">MARDAN</option>
                    <option value="sawabi">SAWABI</option>
                    <option value="tarnol">TARNOL</option>
                    <option value="islamabad">ISLAMABAD(CAPITAL)</option>
                    <option value="faisalabad">FAISALABAD</option>
                    <option value="taxila">TAXILA</option>
                    <option value="ghazi barod">GHAZI BAROD</option>
                    <option value="muzafarabad">MUZAFARABAD</option>
                    <option value="fateh jang">FATEH JANG</option>
                    <option value="multan">MULTAN</option>
                    <option value="lahore">LAHORE</option>
                    <option value="karachi">KARACHI</option>
                </select>
            </span>
            <p> BUS MODEL: </p>
            <select name="model">
                <option value="VOLVO">VOLVO</option>
                <option value="DAEWOO">DAEWOO</option>
                <option value="SCANNIA">SCANNIA</option>
                <option value="CONVOY">CONVOY</option>
                <option value="COASTER">COASTER</option>
                <option value="CITELIS">CITELIS</option>
                <option value="HINO">HINO</option>
                <option value="TOYOTA">TOYOTA</option>
            </select>
            <p>CLASS:</p>
            <select name="class">
                <option value="FIRSTCLASS">FIRST CLASS</option>
                <option value="ECONOMYCLASS">ECONOMY CLASS</option>
            </select>
            <p>FARE:</p>
            <input type='text' placeholder="e.g.10000" name='fare' id="fare" value=""
                onblur='SC._VALIDATE_FIELD_MONEY(this)'>
            <label style="color:red;font-size:20px;">&#10006;</label>
            <p>DRIVER NAME:</p>
            <input type='text' placeholder="e.g.hassan mansoor" name='drivername' id="drivername" value=""
                onblur='SC._VALIDATE_FIELD_STRING(this)'>
            <label style="color:red;font-size:20px;">&#10006;</label>
            <br><br><br>
            <input id="btn" type="submit" value="ADD" name="submit">
            <br><br><br>
        </form>
    </div>
</div>
<script src="../../includes/javascript.js"></script>