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

        // this is the code for total noodles packs
        $ndl = $_POST["ndl"];
        $ttlndl = $ndl * 100;

        // this is the code for total bread
        $brd = $_POST["brd"];
        $ttlbrd = $brd * 40;

        // this is the code for total milk
        $mlk = $_POST["mlk"];
        $ttlmlk = $mlk * 60;
        
        // this is the code for total egg
        $egg = $_POST["egg"];
        $ttlegg = $egg * 5;

        // this is the code for total dhal


      ?>

      <h3>
        <?php
        echo "$ttlbst <br>";
        echo "$ttlndl<br>";
        echo "$ttlbrd<br>";
        echo "$ttlmlk<br>";
        echo "$ttlegg<br>";
        echo "$ttldhl<br>";

        ?>
      </h3>
</html>