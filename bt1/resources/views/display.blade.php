
{{--<h2>Tính giá sản phẩm </h2>--}}

{{--<h4>Mô tả sản phẩm</h4>--}}
{{--{{$product}}--}}
{{--<h4>Giá sản phẩm</h4>--}}
{{--{{$price}}--}}
{{--<h4>Chiết khấu</h4>--}}
{{--{{$discount}}--}}
{{--<h4>Gia trị của chiết khấu</h4>--}}
{{--{{ $discountAmount }}--}}
{{--<h4><strong>Giá trị sản phẩm sau chiết khấu</strong></h4>--}}
{{--{{$discountPrice}}--}}



<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class = "container">
    <h4>Product Discount Calculator</h4>
    <table class="table" style="width: 300px" border="1">
        <tr class="table-primary">
            <th>Mô tả sản phẩm</th>
            <td>{{ $product}}</td>
        </tr>
        <tr class="table-secondary">
            <th>Giá sản phẩm</th>
            <td>{{ $price }}</td>
        </tr>
        <tr class="table-success">
            <th>% Chiết khấu</th>
            <td>{{ $discount }}</td>
        </tr>
        <tr class="table-danger">
            <th>Giá trị chiết khấu</th>
            <td>{{ $discountAmount }}</td>
        </tr>
        <tr class="table-warning">
            <th>giá trị sản phẩm sau chiết khấu</th>
            <td>{{ $discountPrice }}</td>
        </tr>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</div>

</body>
</html>
21:11

