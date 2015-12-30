<html>
 <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.js"></script>

 </head>
  <body>


<form id="commentForm" method="post" action="http://0seascvwapp01.tsi.lan/Shadow_Form/submit_form.php" class="form-horizontal" >

<div style="padding-left:20px;"><legend><h2>South Central Alias Request</h2></legend></div>
<br>  
     <div class="form-group">
   <label class="col-md-1 control-label">Your Name</label>
   <div class="col-md-2">
    <input type="text" class="form-control" name="rep_name" required>
    </div>
  </div>

<div class="form-group">
  <label class="col-md-1 control-label">Type of Call</label>
  <div class="col-md-4">
  <label class="radio-inline"><input type="radio" name="type_of_call" value="Demo" checked>Custom Demo</label>
  <label class="radio-inline"><input type="radio" name="type_of_call" value="Polish Session">Polish Session</label>
  <label class="radio-inline"><input type="radio" name="type_of_call" value="Working Session">Working Session</label>
  <label class="radio-inline"><input type="radio" name="type_of_call" value="Polish Session">Tech QA</label>
  <label class="radio-inline"><input type="radio" name="type_of_call" value="Polish Session">Discovery</label>
  </div>
 </div> 

  <div class="form-group">
  <label class="col-md-1 control-label">Account Name</label>
  <div class="col-md-2">
    <input type="text" class="form-control" name="account_name" required>
    </div>
  </div>
<br>
   <div class="form-group">
   <label class="col-md-1 control-label">Opportunity Link</label>
   <div class="col-md-2">
    <input type="text" name="opp_link" class="form-control" required>
    </div>
  </div>


  <div class="form-group">
   <label class="col-md-1 control-label">Discovery Link</label>
   <div class="col-md-2">
    <input type="text" name="disco_link" placeholder="Sales Rep" class="form-control">
    </div>
  </div>
<div class="form-group">
   <label class="col-md-1 control-label">Meeting Players (comma seperated)</label>
   <div class="col-md-2">
    <input type="text" name="meeting_players" placeholder="Title-Name,Title2-Name2" class="form-control" required>
    </div>
  </div>
<div class="form-group">
   <label class="col-md-1 control-label">Date & Time of Call:</label>
   <div class="col-md-2">
    <input type="date" name="date" class="form-control">
    </div>
  </div>
<br>

 <br><br>
 <div class="form-group">
  <label class="col-md-1 col-sm-offset-0 text-right" for="comment_1">Business Problem to Address</label>

  <div class="col-md-5">
  <textarea class="form-control" name="business_problem" rows="5" id="comment_1" required type="text"></textarea>
  </div>
  </div>

 <br><br>
 <div class="form-group">
  <label class="col-md-1 col-sm-offset-0 text-right" for="comment_1">Why are they looking at Tableau?</label>

  <div class="col-md-5">
  <textarea class="form-control" name="why_tableau" rows="5" id="comment_1" required type="text"></textarea>
  </div>
  </div>

   <br><br>
 <div class="form-group">
  <label class="col-md-1 col-sm-offset-0 text-right" for="comment_1">Goal of Meeting</label>

  <div class="col-md-5">
  <textarea class="form-control" name="meeting_goal" rows="5" id="comment_1" required type="text"></textarea>
  </div>
  </div>

<br>
<div class="col-md-4">
 <input type="submit" value="Send" name="submit"/>
 </div>

 </form>
  <script>
  $("#commentForm").validate();
  </script>
 </body>

</html> 
