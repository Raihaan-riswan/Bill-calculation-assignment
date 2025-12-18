<html>
    <h2>
        Your total bill..
    </h2>
    <br>
    <?php
        $ttlbst = "";
        $ttlndl = "";
        $ttlbrd = "";
        $ttlmlk = "";
        $ttlegg = "";
        $ttldhl = "";
        // this is the code for total biscuit
        $bst = $_POST["bst"];
        $ttlbst = $bst * 50;

        // this is the code for total 
        $ndl = $_POST["ndl"];
        $ttlndl = $ndl * 100;


      ?>

      <h3>
        <?php
        echo "$ttlbst <br>";
        echo "$ttlndl<br>";

        ?>
      </h3>
</html>