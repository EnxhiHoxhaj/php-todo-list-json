<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.4.38/vue.cjs.js"></script>

</head>

<body>
    <div class="container">
        <div id="app" class="row flex-column align-items-center py-5">
            <div class="col-4 my-4">
                <h1>Todo List</h1>
            </div>
            <div class="col-4 list my-2">
                <ul>
                    <li class="d-flex justify-content-between  px-3 py-2">
                        <span></span>
                        <i class="fa-solid fa-trash-can"></i>
                    </li>
                </ul>
            </div>
            <div class="col-4 d-flex justify-content-between">
                <input type="text" placeholder="Add task . . .">
                <button>Inserisci</button>
            </div>
        </div>

    </div>
    <script src="main.js"></script>

</body>

</html>