
<div class="grid-container" style="padding-left:10px; background:#f2f2f2; padding-top:10px">
  <div class="left" style="width:840px; height: 1000px; background:#fff; margin:5px; border:#e9e9e9 1px solid; border-radius:6px">
    <div style='border-bottom:#f2f2f2 1px solid;background:#fff; argin-top:10px; padding:10px; border-radius:4p'>
                <div class='' style='display:flex'>
                  <a style='font-size:20px; color:#333; width:100%; '>Humidity</a>
                  <a style='font-size:13px; background:#f01f4b; width:2%; height:15px; margin-right:10px;margin-top:3px;cursor:pointer; font-weight:700; padding:5px; border-radius:100%; color:#fff; text-align:center'></a><span id="hum"><?php echo sensor1_d("hum") ?></span>

                </div>
                <div class='' style='display:flex'>
                  <a style='font-size:15px; color:#000; width:100%; '>Counting from 0% Equivalent Voltage</a>
                </div>
    </div>
    <div>
      <table id='info' style='margin-top:10p; border:#ccc 1px soli'>
                  <tr>
                  <td style='font-weight:600'><i class='fa fa-map-marker' style='padding-right:5px'></i>Backyard Zone 1</td>
                  </tr>
                  <tr>
                  <td style='max-width:100%; ackground:#ccc;color: #000; border-bottom:#d0d0d0 1px soli'>//support.google.com/accounts/answer/3367674?hl=en</td>
                  </tr>
                  <tr>
                  <td style='max-width:100%; ackground:#ccc; margin-top:10px; border-bottom:#d0d0d0 1px solid'>Pattern Time: 10:00 AM to 9:30 PM</td>
                  </tr>
                  <tr>
                  <td style='font-weight:600'><i class='fa fa-bullhorn' style='padding-right:5px'></i>More</td>
                  </tr>
                  <tr>
                  </tr>
                  <tr>
                  <td>Sensor Type</td>
                  </tr>
                  <tr>
                  <td>Hardware</td>
                  <tr>
                  <tr>
                  <td style="background:#ffb53e;display:flex"><center><button style="border:0; background:0; width:100%; padding:10p">See more</button></center></td>
                  <tr>

                  </table>
                  <div style="max-height:10vw; background:#ccc;overflow-y:scroll"><?php echo sensor1_data() ?></div>
    </div>
    <div>
    <form method="post" enctype="multipart/form-data">
    <div class="grid-container" style="padding-left:10p; border-top:#6482a2 5px solid; margin-top:10px;background:#fbfbfb; margin-top:30p">
      <div class="middle" style="width:100%; height: 500px;ackground:#fff; margin:5px; border:#e9e9e9 1px soli; border-radius:6p; overflow:hidden">
        <div style='; padding-top:20px; padding-bottom: 20px;border:#f2f2f2 1px solid;background:#fff; argin-top:10px; padding:25px; border-radius:4p; display:fle'>
          <div class='' style='width:70%; display:flex'>
            <div style='font-size:14px; color:#333; max-width:100%; margin:10p; padding:5p'>Report Name</div>
            <div style="padding-left: 20px;width:100%">
            <input style="width:60ch" type="text" class="form-control" id="uname" placeholder="Enter Report Name" name="quickseller_customer" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          </div>
          <div class='' style='width:70%; display:flex; padding-top:10px'>
            <div style='font-size:14px; color:#333; width:100%; margin:10p; padding:5p'>Endress Title/Place</div>
            <div style="padding-left: 20px;width:100%">
            <input style="width:60ch" type="text" class="form-control" id="uname" placeholder="Enter Address" name="quickseller_address" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          </div>
          <div class='' style='width:70%; display:flex; padding-top:10px'>
            <div style='font-size:14px; color:#333; width:100%; margin:10p; padding:5p'>Adress Number</div>
            <div style="padding-left: 20px;width:100%">
            <input style="width:60ch" type="text" class="form-control" id="uname" placeholder="Sensor type Number" name="quickseller_mobile" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          </div>
          <div class='' style='width:70%; display:flex; padding-top:10px'>
            <div style='font-size:14px; color:#333; width:100%; margin:10p; padding:5p'>Report Type</div>
            <div style="width:100%">
              <select class="form-control" id="sel1" name="quickseller_city">
                <option>Emergency</option>
                <option>Software Related</option>
                <option>New Ticket Generation</option>
                <option>Not working parameters</option>
              </select>
          </div>
          </div>
          <div class='' style='width:70%; display:flex; padding-top:10px'>
            <div style='font-size:14px; color:#333; max-width:100%; margin:10p; padding:5p'>Recomendation</div>
            <div style="padding-left: 20px;width:100%">
            <input style="width:60ch" type="text" class="form-control" id="uname" placeholder="Enter the Recomendation" name="quickseller_price" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          </div>
          <div class='' style='width:70%; display:flex; padding-top:10px'>
            <div style='font-size:14px; color:#333; width:100%; margin:10p; padding:5p'>Level of Assistance</div>
            <div style="width:100%">
              <select class="form-control" id="sel1" name="quickseller_qty">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
          </div>
          </div>


        </div>

        <div style="width:100%; padding:15p; margin-top: 20px; color:#fff; font-size: 16px;background:#6482a2"><center>
        </center>
      </div>
    </div>
  </div>
  <div style="width:100%; padding:15p; margin-top: 20px; color:#fff; font-size: 16px;background:#6482a2"><center>
          <button style="width:100%; border:0; background:0; padding:15px;cursor:pointer; color:#fff" name='add_quickseller_table'>Upload Report</button>
        </center>
      </div>
  </form>
</div>
  </div>
  <div class="right" style="width:420px; height: 400px; padding: 10px;background:#fff; margin:5px; border:#e9e9e9 1px solid; border-radius:6px">
    <div style="box-shadow: 0 0 2px rgba(0,0,0,0.12),0 2px 4px rgba(0,0,0,0.24);background:#fff; margin:5px; max-width:100%; height:193px">
      <div><a style="padding:10px; padding-top:10px"><i class="fa fa-search"></i>Efficiency</a></div>
      <div style="margin-top:80px; padding-left:130px; max-width:100%"><h1 style="background: #f1be28;padding: 10px;"><i class="fa fa-eye" style="color: #fff;margin-right:10px"></i>50/100%</h1></div>
    </div>
    <div style="box-shadow: 0 0 2px rgba(0,0,0,0.12),0 2px 4px rgba(0,0,0,0.24);background:#fff; margin:5px; max-width:100%; height:193px">
      <div><a style="padding:10px; padding-top:10px"><i class="fa fa-search"></i>Power Consumption</a></div>
      <div style="margin-top:80px; padding-left:130px; max-width:100%"><h1 style="background: #66d555;padding: 10px;"><i class="fa fa-eye" style="color: #fff;margin-right:10px"></i>20/100%</h1></div>
    </div>
  </div>

</div>
