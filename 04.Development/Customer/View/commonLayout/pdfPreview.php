<?php 
session_start();
require_once "../../Model/DBConnection.php";

$id = $_SESSION['book_id'];

//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("
            SELECT * FROM book_m
            WHERE book_id = :id;
    ");

$sql->bindValue(":id", $id);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="modal  fade ms-5 ms-lg-5 ms-md-0" id="pdf" tabindex="-1" aria-labelledby="lg-cartPopUpLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content modal-parent">
            <div class="modal-header cart-header ps-lg-5">
                <h5 class="modal-title ms-lg-4" id="lg-cartPopUpLabel">စာမျက်နှာ အစမ်းကြည့်ရန်</h5>
                <button type="button" class="btn-close btn-close-dark me-lg-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <embed src="<?php echo $result[0]['book_pdf']; ?>" width="310rem" height="420rem" />
            </div>
        </div>
    </div>
</div>