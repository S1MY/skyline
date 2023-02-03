<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office" lang="ru">
<head>
    <title>Generate PDF Laravel 8 - phpcodingstuff.com</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700&display=swap');
    * {
        box-sizing: border-box;
  font-family: "DejaVu Sans", sans-serif;
    }  
        @page {
            margin: 0px 0px 0px 0px !important;
            padding: 0px 0px 0px 0px !important;
        }
    .customTable{
        max-width: 800px;
        margin: 0 auto;
    }
    .customTableLine{
    display: block;
    background: #f2f2f2;
    margin-top: 16px;
    padding: 16px 20px;
    border-radius: 10px;
}
.customTableItem{
    width: 250px;
    font-size: 14px;
    line-height: 20px;
    opacity: 0.8;
    margin: 0 !important;
    display: inline-block;
}
.customTableItem._w100{
    width: 100% !important;
    text-align: center;
    justify-content: center !important;
    font-weight: 500;
}
.customTableItem:not(:nth-child(1)){
    padding-left: 10px;
}
._bold{
    font-weight: 500;
}
._reded{
    color: #EB3B5A;
    font-weight: 600;
}
._yelled{
    color: #FFD700;
    font-weight: 600;
}
._greened{
    color: #20BF6B;
    font-weight: 600;
}
._blueed{
    color: #3867D6;
    font-weight: 600;
}
.pdf-btn{
    margin-top:30px;
}
table {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    border-collapse: separate;
    border-spacing: 0 12px;
		}
		th {
			padding:16px;
			background: #202020;
			color: #ffffff;
            font-size: 12px;
		}
		td {
			padding:16px;
			background: #f2f2f2;
            color: #202020;
            font-size: 12px;
		}
        tr{
  border-spacing: 10px 10px;
}
        tr td:first-child,
        tr th:first-child{
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }
tr td:last-child,
tr th:last-child {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
}
.logotype{
    display: block;
    text-align: center;
    margin-top: 30px;
    margin-bottom: 16px;
}

</style>
<body>
    <div class="container">
        <div class="logotype">
            <svg width="138" height="56" viewBox="0 0 138 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M56.4414 0.78125H58.6289L62.7402 11.748L66.8418 0.78125H69.0293L63.5996 15H61.8613L56.4414 0.78125ZM55.4453 0.78125H57.5254L57.8867 10.2734V15H55.4453V0.78125ZM67.9453 0.78125H70.0352V15H67.584V10.2734L67.9453 0.78125ZM74.0293 0.78125L77.3301 7.56836L80.6309 0.78125H83.3457L78.5605 9.76562V15H76.0898V9.76562L71.3047 0.78125H74.0293Z" fill="#202020"></path>
                <path d="M33.0742 35.6875C33.0742 35.2891 33.0117 34.9375 32.8867 34.6328C32.7695 34.3203 32.5586 34.0391 32.2539 33.7891C31.957 33.5391 31.543 33.3008 31.0117 33.0742C30.4883 32.8477 29.8242 32.6172 29.0195 32.3828C28.1758 32.1328 27.4141 31.8555 26.7344 31.5508C26.0547 31.2383 25.4727 30.8828 24.9883 30.4844C24.5039 30.0859 24.1328 29.6289 23.875 29.1133C23.6172 28.5977 23.4883 28.0078 23.4883 27.3438C23.4883 26.6797 23.625 26.0664 23.8984 25.5039C24.1719 24.9414 24.5625 24.4531 25.0703 24.0391C25.5859 23.6172 26.1992 23.2891 26.9102 23.0547C27.6211 22.8203 28.4141 22.7031 29.2891 22.7031C30.5703 22.7031 31.6562 22.9492 32.5469 23.4414C33.4453 23.9258 34.1289 24.5625 34.5977 25.3516C35.0664 26.1328 35.3008 26.9688 35.3008 27.8594H33.0508C33.0508 27.2188 32.9141 26.6523 32.6406 26.1602C32.3672 25.6602 31.9531 25.2695 31.3984 24.9883C30.8438 24.6992 30.1406 24.5547 29.2891 24.5547C28.4844 24.5547 27.8203 24.6758 27.2969 24.918C26.7734 25.1602 26.3828 25.4883 26.125 25.9023C25.875 26.3164 25.75 26.7891 25.75 27.3203C25.75 27.6797 25.8242 28.0078 25.9727 28.3047C26.1289 28.5938 26.3672 28.8633 26.6875 29.1133C27.0156 29.3633 27.4297 29.5938 27.9297 29.8047C28.4375 30.0156 29.043 30.2188 29.7461 30.4141C30.7148 30.6875 31.5508 30.9922 32.2539 31.3281C32.957 31.6641 33.5352 32.043 33.9883 32.4648C34.4492 32.8789 34.7891 33.3516 35.0078 33.8828C35.2344 34.4062 35.3477 35 35.3477 35.6641C35.3477 36.3594 35.207 36.9883 34.9258 37.5508C34.6445 38.1133 34.2422 38.5938 33.7188 38.9922C33.1953 39.3906 32.5664 39.6992 31.832 39.918C31.1055 40.1289 30.293 40.2344 29.3945 40.2344C28.6055 40.2344 27.8281 40.125 27.0625 39.9062C26.3047 39.6875 25.6133 39.3594 24.9883 38.9219C24.3711 38.4844 23.875 37.9453 23.5 37.3047C23.1328 36.6562 22.9492 35.9062 22.9492 35.0547H25.1992C25.1992 35.6406 25.3125 36.1445 25.5391 36.5664C25.7656 36.9805 26.0742 37.3242 26.4648 37.5977C26.8633 37.8711 27.3125 38.0742 27.8125 38.207C28.3203 38.332 28.8477 38.3945 29.3945 38.3945C30.1836 38.3945 30.8516 38.2852 31.3984 38.0664C31.9453 37.8477 32.3594 37.5352 32.6406 37.1289C32.9297 36.7227 33.0742 36.2422 33.0742 35.6875ZM40.4922 22.9375V40H38.2305V22.9375H40.4922ZM50.793 22.9375L43.7031 30.8945L39.7188 35.0312L39.3438 32.6172L42.3438 29.3125L48.0742 22.9375H50.793ZM48.6133 40L42.2969 31.6797L43.6445 29.8867L51.3086 40H48.6133ZM54.0859 22.9375L58.5156 31.5039L62.957 22.9375H65.5234L59.6406 33.625V40H57.3789V33.625L51.4961 22.9375H54.0859Z" fill="#EB3B5A"></path>
                <path d="M78.0625 38.1602V40H69.5312V38.1602H78.0625ZM69.9766 22.9375V40H67.7148V22.9375H69.9766ZM83.0781 22.9375V40H80.8164V22.9375H83.0781ZM100.316 22.9375V40H98.043L89.4531 26.8398V40H87.1914V22.9375H89.4531L98.0781 36.1328V22.9375H100.316ZM115.164 38.1602V40H106.129V38.1602H115.164ZM106.586 22.9375V40H104.324V22.9375H106.586ZM113.969 30.2734V32.1133H106.129V30.2734H113.969ZM115.047 22.9375V24.7891H106.129V22.9375H115.047Z" fill="#3867D6"></path>
                <rect x="2" y="7" width="44" height="2" fill="#202020"></rect>
                <rect x="92" y="7" width="44" height="2" fill="#202020"></rect>
                <rect x="2" y="54" width="134" height="2" fill="#202020"></rect>
                <rect y="7" width="2" height="49" fill="#202020"></rect>
                <rect x="136" y="7" width="2" height="49" fill="#202020"></rect>
            </svg>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Дата и время</th>
                    <th>Имя и ID</th>
                    <th>Операция</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>03 февраля в 13:58:19</td>
                    <td>Ансвер Ансверов (00007)</td>
                    <td><span>Оплата "VIP" <span class="_greened">100000€</span></span></td>
                </tr>
            </tbody>
        </table>
        <div class="customTable">
            <div class="customTableLine customTableHead">
                <p class="customTableItem">Дата и время</p>
                <p class="customTableItem">Имя и ID</p>
                <p class="customTableItem">Операция</p>
            </div>
            <div class="customTableLine">
                <p class="customTableItem" aria-label="Дата и время">03 февраля в 13:58:19</p>
                <p class="customTableItem" aria-label="Имя и ID">Ансвер Ансверов (00007)</p>
                <p class="customTableItem" aria-label="Операция"><span>Оплата "VIP" <span class="_greened">100000€</span></span></p>
            </div>
            <div class="customTableLine">
                <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:21</p>
                <p class="customTableItem" aria-label="Имя и ID">Ансвер Ансверов (00007)</p>
                <p class="customTableItem" aria-label="Операция"><span>Оплата "Премиум" <span class="_greened">10000€</span></span></p>
            </div>
            <div class="customTableLine">
                <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:21</p>
                <p class="customTableItem" aria-label="Имя и ID">Ансвер Ансверов (00007)</p>
                <p class="customTableItem" aria-label="Операция"><span>Оплата "Премиум" <span class="_greened">10000€</span></span></p>
            </div>
            <div class="customTableLine">
                <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:21</p>
                <p class="customTableItem" aria-label="Имя и ID">Ансвер Ансверов (00007)</p>
                <p class="customTableItem" aria-label="Операция"><span>Оплата "Премиум" <span class="_greened">10000€</span></span></p>
            </div>
            <div class="customTableLine">
                <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:21</p>
                <p class="customTableItem" aria-label="Имя и ID">Ансвер Ансверов (00007)</p>
                <p class="customTableItem" aria-label="Операция"><span>Оплата "Премиум" <span class="_greened">10000€</span></span></p>
            </div>
            <div class="customTableLine">
                <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:21</p>
                <p class="customTableItem" aria-label="Имя и ID">Ансвер Ансверов (00007)</p>
                <p class="customTableItem" aria-label="Операция"><span>Оплата "Премиум" <span class="_greened">10000€</span></span></p>
            </div>
            <div class="customTableLine">
                <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:21</p>
                <p class="customTableItem" aria-label="Имя и ID">Ансвер Ансверов (00007)</p>
                <p class="customTableItem" aria-label="Операция"><span>Оплата "Премиум" <span class="_greened">10000€</span></span></p>
            </div>
        </div>
        <div class="text-center pdf-btn">
            <a href="{{ route('pdf.generate') }}" class="btn btn-primary">Generate PDF</a>
        </div>
    </div>
</body>
</html>
