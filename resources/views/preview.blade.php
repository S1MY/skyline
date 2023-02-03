<!DOCTYPE html>
<html>
<head>
    <title>Generate PDF Laravel 8 - phpcodingstuff.com</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style type="text/css">
    h2{
        text-align: center;
        font-size:22px;
        margin-bottom:50px;
    }
    body{
        background:#f2f2f2;
    }
    .section{
        margin-top:30px;
        padding:50px;
        background:#fff;
    }
    .pdf-btn{
        margin-top:30px;
    }
</style>
<body>
    <div class="container">
        <div class="customTable">
            <div class="customTableLine customTableHead">
                <p class="customTableItem">Дата и время</p>
                <p class="customTableItem">Имя и ID</p>
                <p class="customTableItem">Операция</p>
            </div>
                                        <div class="customTableLine">
                    <p class="customTableItem" aria-label="Дата и время">03 февраля в 13:58:19</p>
                    <p class="customTableItem" aria-label="Имя и ID">
                        Ансвер Ансверов
                                                                (00007)
                                                        </p>
                                                    <p class="customTableItem" aria-label="Операция"><span>Оплата "VIP" <span class="_greened">100000€</span></span></p>
                </div>
                                        <div class="customTableLine">
                    <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:21</p>
                    <p class="customTableItem" aria-label="Имя и ID">
                        Ансвер Ансверов
                                                                (00007)
                                                        </p>
                                                    <p class="customTableItem" aria-label="Операция"><span>Оплата "Премиум" <span class="_greened">10000€</span></span></p>
                </div>
                                        <div class="customTableLine">
                    <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:13</p>
                    <p class="customTableItem" aria-label="Имя и ID">
                        Ансвер Ансверов
                                                                (00007)
                                                        </p>
                                                    <p class="customTableItem" aria-label="Операция"><span>Оплата "Стандарт" <span class="_greened">1000€</span></span></p>
                </div>
                                        <div class="customTableLine">
                    <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:03</p>
                    <p class="customTableItem" aria-label="Имя и ID">
                        Ансвер Ансверов
                                                                (00007)
                                                        </p>
                                                    <p class="customTableItem" aria-label="Операция"><span>Оплата "Эконом" <span class="_greened">100€</span></span></p>
                </div>
                                        <div class="customTableLine">
                    <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:48:34</p>
                    <p class="customTableItem" aria-label="Имя и ID">
                        Ансвер Ансверов
                                                                (00007)
                                                        </p>
                                                    <p class="customTableItem" aria-label="Операция"><span>Пополнение баланса <span class="_greened">+1000000€</span></span></p>
                </div>
                                </div>
                <div class="text-center pdf-btn">
                  <a href="{{ route('pdf.generate') }}" class="btn btn-primary">Generate PDF</a>
                </div>
    </div>
</body>
</html>
