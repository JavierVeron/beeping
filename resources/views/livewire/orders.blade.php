<div class="container">
    <div class="row my-5">
        <div class="col text-center">
            <img src="https://gobeeping.com/wp-content/uploads/2021/01/cropped-beeping-logotipo_4-1-115x37.png.webp" alt="Beeping" />
        </div>
    </div>
    <div class="row my-5">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Referencia</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->ID}}</td>
                        <td>{{$order->order_ref}}</td>
                        <td>{{$order->customer_name}}</td>
                        <td>{{$order->qty}}</td>
                        <td>${{$order->total}}</td>
                    </tr>
                @endforeach
                </tbody>                
            </table>
        </div>
    </div>
</div>
