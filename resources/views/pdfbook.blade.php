<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
  @vite('resources/css/tailwind.css')
 
</head>
<body class="">


<div id="viewer" style="width: 100%; height:1300px;" ></div>
  <script type="text/javascript" src="https://cloudpdf.io/viewer.min.js"></script>
  <script>
    const config = { 
      documentId: '{{ $book->documentId }}',
      darkMode: true, 
    };
    CloudPDF(config, document.getElementById('viewer')).then((instance) => {
      
    });
  </script>


</body>
</html>

