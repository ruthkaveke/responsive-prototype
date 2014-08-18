<?php include "header.php";?>

<div class="container-fluid">
<div class="maps">
    <div class="container-fluid">
      <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=kisauni+mombasa&amp;sll=37.0625,-95.677068&amp;sspn=38.638819,82.089844&amp;ie=UTF8&amp;hq=&amp;hnear=Kisauni,+Mombasa,+Coast+Province,+Kenya&amp;t=m&amp;z=14&amp;ll=-4.02262,39.687933&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=kisauni+mombasa&amp;sll=37.0625,-95.677068&amp;sspn=38.638819,82.089844&amp;ie=UTF8&amp;hq=&amp;hnear=Kisauni,+Mombasa,+Coast+Province,+Kenya&amp;t=m&amp;z=14&amp;ll=-4.02262,39.687933" style="color:#0000FF;text-align:left">View Larger Map</a></small>
    </div>
<div><!-- closing maps  -->

<div class="row">
<div class="col-md-6">
    <form action="contacts.php" enctype="multipart/form-data" method="post" name="contactform" > 
      <table style="table table-bordered table-responsive" >
      <tbody>
      <tr>
        
      <td class="tableDetail" width="415" height="29" align="left">
        <span style="color: #ff0000;">* </span>Full Names:
      </td>
      <td width="436" align="left" valign="top">
        <input title="FullNames" class="form-control" name="FullNames" size="50" type="text" placeholder="Full Names" /><br>
      </td>
      </tr>
      <tr>
      <td class="tableDetail" height="29" align="left">
        <span style="color: #ff0000;">* </span>Phone Number:
      </td>
      <td align="left" valign="top">
        <input title="TelNum" class="form-control" name="TelNum" size="30" type="text" placeholder="Telephone Number" /><br>
      </td>
      </tr>
      
      <tr>
      <td class="tableDetail" height="29" align="left">
        <span style="color: #ff0000;">* </span>Email Address:
      </td>
      <td align="left" valign="top">
        <input title="Email" class="form-control" name="Email" size="30" type="text" placeholder="Email" /><br>
      </td>
      </tr>
      <tr>
      <td class="tableDetail" height="67" align="left" valign="top">
        <p align="left">Enquiry</p>
        <p class="style4" align="left">&nbsp;</p>
      </td>
      <td class="tableDetail" height="67" align="left" valign="top"> <textarea class="form-control" title="message" cols="50" rows="5" name="message"></textarea> <br></td>
      </tr> 
      <tr>
      <td colspan="2" height="32" valign="top">
        <p><span style="color: #ff0000;"><strong>*</strong></span> Required Fields</p>  
      </td>
      </tr> 
      <tr>
      <td colspan="2" height="32" valign="top">
        <p><input class="btn btn-success btn-lg" title="Submit" name="button" type="submit" value="Submit Enquiry" /></p> 
      </td>
      </tr>
      </tbody>
      </table>
      </form>   
</div>
  
  <div class="col-md 3">

  <h2>Get in touch with us</h2>

 
  <p>Jonnesmart cleaning services</p>
  <p>P.O Box 89261-80100</p>
  <p>Mombasa Kenya</p>
  <p>Phone: 0729 661039</p>
  <p>&nbsp&nbsp&nbsp&nbsp : 0716 659823</p>
  
  </div>

<div class="col-md-3">
  <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fcrablinks.interactive&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:80px;" allowTransparency="true"></iframe>
</div>
</div><!--row-->
</div><!--container-->

  <?php include "footer.php"; ?>
   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
