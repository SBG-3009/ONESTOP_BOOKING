<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
    </head>

    <body>
<div class="main-grid">
            <div class="agile-grids">
              <div class="row">
            </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<form action = "/court" method = "post">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Court</h5>
      </div>
    <div class="modal-body">
      
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      <table>
      <tr>
      <td>Court Name</td>
      <td><input id="name" type='text' name='name' placeholder="Enter Court Name" required></td>
      </tr>
      <br>
      <tr>
      <td>Location</td>
      <td><input id="sportFieldId" type='text' name='sport_field_id' placeholder="Enter a Location" required></td>
      </tr>
      <tr>
        <td>Sports Type</td>
        <td><input id="type" type='text' name='type' placeholder="Sports Type" required /></td>
        </tr>
      <td colspan = '2'>
      <br>
      <input type = 'submit' value = "Add student"/>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </td>
    </tr>
    </table>
</form>
      </div>
       </div>
  </div>
</div>
  </body>
</html>