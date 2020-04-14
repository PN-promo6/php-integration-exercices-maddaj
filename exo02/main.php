<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5bb1d77498.js" crossorigin="anonymous"></script>

    <title>Exo 2</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-8 mx-auto">
                <div class="card my-5">
                    <h5 class="card-header bg-primary text-white">
                        Todo List
                    </h5>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="text" id="search" class="form-control" placeholder="Search todo">
                            <div class="input-group-append">
                                <span class="input-group-text"> <i class="fas fa-search"></i> </span>
                            </div>
                        </div>
                        <ul class="list-group mb-3">
                            <?php
                            $todo = array("la lessive", "nourrir les chats", "regarder netflix", "pas de rapport de stage");
                            foreach ($todo as $oneTodo) {
                            ?>
                                <li class="list-group-item">
                                    <i class="far fa-square done-icon"></i>
                                    <i class="far fa-check-square done-icon"></i>
                                    <span class="todo-text"><?= $oneTodo ?></span>
                                    <i class="far fa-trash-alt"></i>
                                </li>
                            <?php
                            }
                            ?>

                        </ul>
                        <button id="clearBtn" type="button" class="btn btn-dark btn-sm">Clear All</button>
                    </div>
                    <div class="card-footer">
                        <form id="form">
                            <div class="input-group">
                                <input type="text" class="form-control" id="todo" placeholder="Add new todo item">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>