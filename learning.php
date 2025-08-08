<?php
include 'header.php';
?>
<style>
.story {
  padding-top: 40px;
  padding-bottom: 40px;
  padding-right: 0px;
    padding-left: 0px;
}

.story-content {
  display: flex;
  align-items: center;
  gap: 20px;
}

.story-text {
  flex: 0 0 40%; /* 40% for text */
}

.story-image {
  flex: 0 0 60%; /* 60% for image */
}

.story-image img {
  width: 100%;
  height: auto;
  display: block;
  border: 2px solid #ddd;
  border-radius: 8px;
}
</style>

<section class="story">
  <div class="story-content">
    <div class="story-text">
      <div class="story-heading">
        <h3>CERTIFICATE</h3>
        <h2>This is the certificate of the O7 Services PHP certificate of the summer training.</h2>
      </div>
      <p>
        Over the course of 45 days at O7 Services, I had the opportunity to contribute to a variety of real-world tasks—from daily design challenges to full-fledged development projects. 
      </p>
    </div>
    <div class="story-image">
      <img src="image/certificate1.jpg" alt="O7 Internship Experience">
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>
