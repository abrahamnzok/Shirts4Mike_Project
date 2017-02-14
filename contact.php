<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["user_name"];
    $mail = $_POST["user_mail"];
    $message = $_POST["user_message"];
    echo $name;
    echo $mail;
    echo $message;
    header("Location: contact.php?status=thanks");
    exit;
}
?>

<?php
$page_title = 'Contact';
$section = $page_title;
include('inc/header.php');
?>

<div class="section page">
    <div class="wrapper">
        <h1>Contact</h1>
        <?php if(isset($_GET["status"]) AND ($_GET["status"] == "thanks")) { ?>
            <p style="text-align: center">Thanks for your email. I'll will be in touch soon.</p>
        <?php }else { ?>
        <p style="text-align: center">I&rsquo;d like to hear from you again</p>
            <form method="post" action="contact.php">
                <table>
                    <tr>
                        <th>
                            <label for="user_name">Name</label>
                        </th>
                        <td>
                            <input type="text" name="user_name" placeholder="name" id="user_name">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="user_mail">Mail</label>
                        </th>

                        <td>
                            <input type="text" name="user_mail" placeholder="mail" id="user_mail">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="user_message">Message</label>
                        </th>
                        <td>
                            <textarea  name="message" id="user_message"></textarea>
                        </td>
                    </tr>
                </table>
                <input type="submit" name="Submit" value="submit">
            </form>
        <?php } ?>
    </div>
</div>


<?php
include ('inc/footer.php');
?>