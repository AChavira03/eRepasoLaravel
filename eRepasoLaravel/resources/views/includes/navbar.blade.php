@section('navbar')
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="/home">Inicio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-right: 15px">
                                Menu
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="padding: 5px">
                                <a href="{{action('controlador@vinci')}}">Leonardo da Vinci</a>
                                <br>
                                <a href="{{action('controlador@dali')}}">Salvador Dali</a>
                                <br>
                                <a href="{{action('controlador@miguelAngel')}}">Miguel Angel</a>
                                <br>
                                <a href="{{action('controlador@picasso')}}">Pablo Picasso</a>
                                <br>
                                <a href="{{action('controlador@vanGogh')}}">Vincent van Gogh</a>
                                <br>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
@show
