<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-contact">
          <h3>Address<span>.</span></h3>
          <p>
            <?= $address; ?><br>
          <h3>Email Us</h3>
          <p><?= $email1 != "" ? "<a href='mailto:$email1'>$email1</a>" : ""; ?></p>
          <p><?= $email2 != "" ? "<a href='mailto:$email2'>$email2</a>" : ""; ?></p>
          </p>
          <p>
          <h3>Call Us</h3>
          <p><?= $phone1 != "" ? "<a href='tel:$phone1'>$phone1</a>" : ""; ?></p>
          <p><?= $phone2 != "" ? "<a href='tel:$phone2'>$phone2</a>" : ""; ?></p>
          </p>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Join Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
        &copy; Copyright <strong><span>Project</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Udit Ghetiya</a>
      </div>
    </div>
    <div class="social-links text-center text-md-end pt-3 pt-md-0">
      <?php
      $socialResult = $client->getSocialMediaLinks();

      while ($socialRow = $socialResult->fetch_assoc()) {
        if ($socialRow["facebook"] !== "") {
          echo "<a href='$socialRow[facebook]' class='facebook'><i class='bx bxl-facebook'></i></a>";
        }
        if ($socialRow["twitter"] !== "") {
          echo "<a href='$socialRow[twitter]' class='twitter'><i class='bx bxl-twitter'></i></a>";
        }
        if ($socialRow["instagram"] !== "") {
          echo "<a href='$socialRow[instagram]' class='instagram'><i class='bx bxl-instagram'></i></a>";
        }
        if ($socialRow["linkedin"] !== "") {
          echo "<a href='$socialRow[linkedin]' class='linkedin'><i class='bx bxl-linkedin'></i></a>";
        }
        if ($socialRow["whatsapp"] !== "") {
          echo "<a href='$socialRow[whatsapp]' class='whatsapp'><i class='bx bxl-whatsapp'></i></a>";
        }
        if ($socialRow["youtube"] !== "") {
          echo "<a href='$socialRow[youtube]' class='youtube'><i class='bx bxl-youtube'></i></a>";
        }
        if ($socialRow["snapchat"] !== "") {
          echo "<a href='$socialRow[snapchat]' class='snapchat'><i class='bx bxl-snapchat'></i></a>";
        }
        if ($socialRow["telegram"] !== "") {
          echo "<a href='$socialRow[telegram]' class='telegram'><i class='bx bxl-telegram'></i></a>";
        }
      }
      ?>
    </div>
  </div>
</footer><!-- End Footer -->