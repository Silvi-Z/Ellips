@extends('layouts.app')

@section('content')
    <main class="productsPage">
        <h1>Համակարգեր և ապրանքներ</h1>
        <div class="selectButtons">
            <button><a href="products.blade.php">Ապրանքներ</a></button>
            <button><a href="../systems/systems.blade.php">Համակարգեր</a></button>
        </div>
        <div class="wrapper">
            <div class="filter">
                <div>
                    <label>
                        <input type="text" placeholder="Փնտրել">
                    </label>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                        Համակարգեր
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Համակարգ 1</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 2</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                        <li><a class="dropdown-item" href="#">Համակարգ 3</a></li>
                    </ul>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                        Ապրանքներ
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Ապրանք 1</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 2</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                        <li><a class="dropdown-item" href="#">Ապրանք 3</a></li>
                    </ul>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                        Բրենդեր
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Բրենդ 1</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 2</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                        <li><a class="dropdown-item" href="#">Բրենդ 3</a></li>
                    </ul>
                </div>
            </div>
            <div class="productsWrapper d-flex flex-wrap justify-content-center">
                <?
                $products = json_decode(file_get_contents("products.json"), true);
                foreach ($products as $key => $value) {
                    echo '
                    <div class="product">
                        <div class="d-flex align-items-center justify-content-center flex-column">
                            <img src=' . $value["productImage"] . ' alt="">
                        </div>
                        <div>
                            <h6>' . $value["productName"] . '</h6>
                            <p>' . $value["productPrice"] . '</p>
                        </div>
                    </div>';
                }
                ?>
            </div>

            <div class="pageNavigate d-flex justify-content-center">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
            </div>
        </div>
    </main>
@endsection
