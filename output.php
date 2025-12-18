<html>
  <style>
    table {
  width: 350px;
  border-collapse: collapse;
  font-family: "Courier New", monospace;
  font-size: 15px;
  margin: 20px auto;
  border: 1px solid #000;
}

th {
  text-align: left;
  border-bottom: 1px dashed #000;
  padding: 6px 4px;
  font-weight: bold;
}

td {
  padding: 6px 4px;
  border-bottom: 1px dotted #555;
}

tr:last-child td {
  border-bottom: none;
}

td[colspan="2"] {
  font-weight: bold;
  border-top: 1px dashed #000;
  background: #f9f9f9;
}

table tr:nth-child(even) {
  background-color: #fdfdfd;
}

table tr:nth-child(odd) {
  background-color: #ffffff;
}
a {
  display: inline-block;
  padding: 8px 16px;
  background-color: #000;
  color: #fff;
  text-decoration: none;
  font-family: "Courier New", monospace;
  font-size: 14px;
  border-radius: 4px;
  border: 1px solid #000;
  margin-top: 15px;
}

a:hover {
  background-color: #fff;
  color: #000;
}


  </style>
    
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

        // this code for total bill
        $ttl = $ttlbrd + $ttlbst + $ttldhl + $ttlegg + $ttlmlk +$ttlndl;

      ?>

      
      
      
      <h3><center>Thank you, sir/ma’am. Here’s your bill.</center></h3>
      <table>
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
          
          <td><?php echo "$ttl" ?></td>
        </tr>
      </table>
      <a href="index.html"> Go back</a>
</html>