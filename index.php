<?php
require_once 'functions.php';

$pdo = getPdo();

$carriers = getCarriers($pdo);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Recirc Text Notification Tool</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css">
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/index.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div id="back-button"></div>
                <h1>Recirc Text Notification Tool</h1>
            </header>
            <main>
                <div id="copyright">&copy; 2022 Brenton Saunders (saubrent)</div>
                <div id="status">Status: </div>
                <button id="stop">Stop</button>
                <div id="setup">
                    <p>To run the tool, click the Copy to Clipboard button below, and then open FL Recirc by Lane in a new browser tab. In the address bar, type "javascript:",  then paste the contents of the clipboard, and then hit Enter. Afterward, verify that the status above changes to Running.</p>
                    <button id="copy-to-clipboard">Copy to Clipboard</button>
                </div>
                <div id="users">
                    <h2>Users</h2>
                    <table></table>
                    <button id="add-user">+</button>
                </div>
                <div id="user-details">
                    <form>
                        <label><span>Name</span><input placeholder="Scooby Doo" name="name" type="text" /></label>
                        <label>
                            <span>Shift</span>
                            <select name="shift">
                                <option disabled selected>Shift</option>
                                <option value="1">Day</option>
                                <option value="2">Night</option>
                            </select>
                        </label>
                        <label><span>Phone</span><input placeholder="555-555-5555" name="phone" type="text" /></label>
                        <label>
                            <span>Carrier</span>
                            <select name="carrier">
                                <option disabled selected>Carrier</option>
<?php
foreach($carriers as $carrier) {
    echo "                                <option value=\"${carrier['id']}\">${carrier['carrier']}</option>\n";
}
?>
                            </select>
                        </label>
                        <label class="notifications">
                            <span>Notifications</span>
                            <input name="notifications" type="checkbox" />
                            <div></div>
                        </label>
                        <button type="button" id="delete-user">Delete</button>
                        <button type="button" id="save-user">Save</button>
                    </form>
                </div>
            </main>
            <footer></footer>
        </div>
    </body>
</html>