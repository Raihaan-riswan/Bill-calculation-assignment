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
        $dhl = $_POST["dhl"];
        $ttldhl = $dhl * 75;

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
      <h3>Thank you, sir/ma’am. Here’s your bill.</h3>
      <table border = "1">
        <tr>
          <th>Items</th>
          <th>INumber of Items</th>
          <th>Total Rs.</th>
        </tr>
        <tr>
          <td>Biscuit</td>
          <td><?php echo "$bst" ?></td>
          <td><?php echo "$ttlbst" ?></td>
        </tr>
        <tr>
          <td>noodles</td>
          <td><?php echo "$ndl" ?></td>
          <td><?php echo "$ttlndl" ?></td>
        </tr>
        <tr>
          <td>Bread</td>
          <td><?php echo "$brd" ?></td>
          <td><?php echo "$ttlbrd" ?></td>
        </tr>
        
        <tr>
          <td>Milk</td>
          <td><?php echo "$mlk" ?></td>
          <td><?php echo "$ttlmlk" ?></td>
        </tr>
        <tr>
          <td>Egg</td>
          <td><?php echo "$egg" ?></td>
          <td><?php echo "$ttlegg" ?></td>
        </tr>
        <tr>
          <td>Dhal</td>
          <td><?php echo "$dhl" ?></td>
          <td><?php echo "$ttldhl" ?></td>
        </tr>
        <tr>
          <td colspan = "2">Total bill</td>
          
          <td><?php echo "$ttldhl" ?></td>
        </tr>
      </table>
</html>