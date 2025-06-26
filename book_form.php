<!-- <?php
 
    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];
        
        $request = "insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values 
        ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

        mysqli_query($connection, $request);

        header('location:book.php');
}
else{
    echo 'something went wrong try again';
}
?> -->

<?php
if (isset($_POST['send'])) {
    // Collect form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $location = $_POST['location'] ?? '';
    $guests = $_POST['guests'] ?? '';
    $arrivals = $_POST['arrivals'] ?? '';
    $leaving = $_POST['leaving'] ?? '';

    // Simple check to make sure name isn't empty
    if (!empty($name)  && !empty($email) && !empty($phone)) {
        echo "
        <script>
            alert('✅ Booking successful! Thank you, $name.');
            window.location.href = 'home.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('❌ Please fill in all required fields.');
            window.location.href = 'book.php';
        </script>
        ";
    }
} else {
    // If the file is accessed directly
    header('Location: book.php');
    exit();
}
?>
