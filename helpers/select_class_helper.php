<div class="form-group">
          <label>Class</label>
          <?php 

                $sql1 = "SELECT * FROM studentclass";
                $result1 = mysqli_query($conn,$sql1) or die('Select Class in Update student failed.');


            if(mysqli_num_rows($result1) > 0):
          ?>

                <select name="sclass">
                    <?php while($row1 = mysqli_fetch_assoc($result1)):   ?>
                        <?php 
                            if($row['sclass'] == $row1['cid']){
                                $selected = "selected";
                            } else {
                                $selected = "";
                            }    
                            
                        ?>
                            <option <?php echo $selected; ?> value="<?php echo $row1['cid']; ?>"><?php echo $row1['cname']; ?></option>
                    <?php endwhile; ?>
                </select>

          <?php endif; ?>
      </div>