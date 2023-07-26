<?= $this->extend('layout/32602100077_Giza') ?>
<?= $this->section('content') ?>
<div class="about">
  <div class="about-us">
    <h1>About Us</h1>
    <p>An undergraduate student at the Faculty of Industrial Technology, majoring in Informatics Engineering from the Islamic University of Sultan Agung Semarang</p>
  </div>
  <div class="about-experience">
    <h1>Experience</h1>
    <div class="about-experience-list">
      <table border='1'>
        <tr>
          <th rowspan='3'>2023</th>
          <th colspan='2'>HM Teknik Informatika</th>
          <th rowspan='3'>2023</th>
          <th colspan='2'>Seminar Riset Mahasiswa Computer & Electrical</th>
        </tr>
        <tr>
          <td>Semarang</td>
          <td>Indonesia</td>
          <td>Semarang</td>
          <td>Indonesia</td>
        </tr>
        <tr>
          <td colspan='2'>Divisi Kewirausahaan</td>
          <td colspan='2'>Comitte SeRiMa-CE</td>
        </tr>
      </table>
    </div>
  </div>
</div>
<style>
  /* app/Views/layout/32602100135_Sadra.css */
  .about {
    display: block;
    justify-content: column;
    align-items: center;
  }

  .about-us,
  .about-experience {
    padding: 50px;
    text-align: center;
    background-color: #f2f2f2;
    border-radius: 5px;
    margin-bottom: 10px;
  }


  .about-us h1,
  .about-experience h1 {
    color: #333;
    margin-bottom: 10px;
  }


  .about-us p {
    font-size: 16px;
    color: #666;
  }

  .about-experience-list table {
    width: 100%;
    border-collapse: collapse;
  }

  .about-experience-list th,
  .about-experience-list td {
    padding: 20px;
    border: 1px solid #333;
  }

  .about-experience-list th {
    background-color: #f2f2f2;
    text-align: center;
    font-weight: bold;
  }

  .about-experience-list td {
    text-align: center;
    font-size: 14px;
  }

  @media(min-width:600px) {
    .about {
      flex-direction: row;
      justify-content: space-between;
      align-items: flex-start;
    }

    .about-us,
    .about-experience {
      flex: 1;
      margin: 0 10px;
    }

    .about-us p {
      font-size: 18px;
    }

    .about-experience-list td {
      font-size: 16px;
    }
  }
</style>
<?= $this->endSection() ?>