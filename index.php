<!DOCTYPE html>
<html>

<head>
  <title>Page Title</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <style>
    input {
      color: red;
    }

    #tombol-hapus {
      padding: 10px;
      margin-left: 20px;
      border: solid blue 5px;
      background-color: red;
    }

    .tombol-aksi {
      background-color: green;
    }
  </style>
</head>

<body>
  <?php

  ?>
  <h1>This is a Heading</h1>
  <h2>This is a Heading</h2>
  <p>This is a paragraph.</p>
  <button id="tombol-hapus">Button 1</button>
  <button class="btn btn-success">Button 2</button>
  <button class="tombol-aksi">Button 3</button>
  <input type="text" />
  <input type="number" />
  <input type="date" />
  <a href="https://www.google.com">Klik</a>
  <br />
  <!-- Ini adalah komentar -->
  <select>
    <option>Opsi 1</option>
    <option>Opsi 2</option>
    <option>Opsi 3</option>
  </select>
  <br />

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>