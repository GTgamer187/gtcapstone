<!DOCTYPE html>
<!--Gurshan Dhillon-->
<!--Sept 28-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capstone</title>
    <link rel="stylesheet" href="capstonestyling.css">
    <?php  
    //links phpfunctionsdh page and uses functions from it
    include 'phpFunctionsCapstone.php'; 
    connServer();
    createDB();
    connDB();
    createtable1();
  ?>
    
</head>
<body>
<!--navigation bar that redirect to other pages--> 
<ul id="navigation">
    <li><a href="Capstonehomepage.html">Home</a></li>
    <li><a href="Capstonebasics.html">Essentials</a></li>
    <li><a href="Capstonehtml&css.html">HTML&CSS</a></li>
    <li><a href="CapstoneJavascript.html">Javascript</a></li>
    <li><a href="Capstonedatabasing.php">Databasing</a></li>
</ul>

<!--page name-->
<div class="hed"><h1>My Coding Journey</h1></div>

<!--main body area-->
<div id="bodydiv">
<!--main topic header-->
<div>
<h2>Databasing</h2>
</div>
<!--subtopic topic header-->
<div>
<h3>PHP:</h3>
</div>

<p>
Who: Hypertext Preprocessor or better known as PHP, is a server-side scripting language.
</p><p>
What:PHP is primarily used to create dynamic web pages, where the content can be changed based on user interactions and data from databases.
</p><p>
How:It can be embeded inside of HTML similarly to Javascript but instead of script tags, it is through PHP tags. An exernal script sheet can also be linked to allow for more usability.
</p><p>
When:PHP is used to handle forms, process user input, create database connections, and produce dynamic content for websites.
</p>

<div>
<h3>SQL:</h3>
</div>

<p>
Who: Structured Query Language or better as SQL, is a domain-specific language used for managing and manipulating relational databases.
</p><p>
What: SQL is used to create, modify, and query against databases.
</p><p>
How:SQL has certain preset commands/queries which can be used to insert data, select/retrieve data, delete data, and restructure databases.
</p><p>
When: SQL is essential for structured data retrieval and storage. It works alongside a database management system. The most widely known one is MySQL.
</p>

<div>
<h3>Combined Use:</h3>
</div>
<p>
PHP frequently connects with SQL databases to constantly fetch, manipulate, and store data on web servers. 
PHP produces dynamic content that reacts to user input on a web page by processing data and interacting with SQL databases.
Together, they make it possible for programmers to handle data easily and create dynamic, interactive websites.
</p>

<div>
<h3>My experience:</h3>
</div>

<p>Learning PHP and SQL was the most difficult due to the same reason as JavaScript but to much more of an extreme as each statement/operation is much more specific so you need to plan ahead of what you think you'll need.
    This unit is where I needed my mentor's guidance the most as I kept encountering problem after problem. 
    Each assignment kept adding on to the last. 
    They all had some sort of checklist to follow on what has to be included. 
    For that assignment I decided that you had to have an account to access the calculator. 
    In order to fulfil this, I had to code in a signup and login page. 
    My biggest problem was trying to display my own error message to the user when they tried to make an account under an already existing name. 
    Debugging was a majority of the time I spent on that assignment. </p>

<div>
<h3>Example Code</h3>
</div>
    
<p>The signup page I made for my 3rd assignment for G2T. This is the users display but after they fill out the form, the info gets sent the account creater program I made.</p>
<img src="Images/signuppage.png" alt="sign up page" style="width: 49%; height: auto;">
<p>This is the login page I made. After the user fills out the form, the info is sent to the login checker function I programmed.</p>
<img src="Images/loginpage.png" alt="login page" style="width: 50%; height: auto;">
<p>This is the account creator program. The comments throughout the code explains the main gist of what the program does.</p>
<img src="Images/signupcode.png" alt="sign up page code" style="width: 99%; height: auto;">
<p>The login checker function. The comments throughout the code explains the main gist of what the program does.</p>
<img src="Images/logincode.png" alt="login page code" style="width: 99%; height: auto;">


    <p>The PHP and SQL I integrated on this project is in the message section below. 
    The major steps the section takes are that it grabs user input, stores it in a database, then shows the data right after on the screen.  </p>





<!--comment/feeback form-->
<form action="CapstoneProcessmessage.php" method="post">
    <fieldset><legend>Comments or Feedback</legend>
    Name: <input type="text" name="name"/><br/>
    Message: <br/> <textarea name="message" rows="4" cols="32"></textarea> <br/>
    <input type="submit"/>
    </fieldset>
</form>

<br>
<br>

<h2>Questions/Comments:</h2>

<br>
<br>
<!--Code responsible for showing the comments
Goes through each row of the database and prints out the name and its corresponding-->
<?php
global $servername, $username, $password, $database;
$connect = mysqli_connect($servername, $username, $password, $database);
$sqlSelect = "SELECT name1, msg FROM messages";
$result = mysqli_query($connect, $sqlSelect);
if(mysqli_num_rows($result)>0){
    echo "<table>";
    echo "<tr><th>Name</th> <th>Questions/Comments</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        foreach($row as $x=>$x_value){
            if($x=='name1') echo "<td>$x_value: </td>";
            else echo "<td>$x_value</td>";
        }
        echo "</tr>";
    }
}else{
        echo "Sorry, you have received no comments yet";
    }

?>

</div>
</body>
</html>