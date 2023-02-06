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
  font-family: DejaVu Sans, sans-serif;
    }
    body{
        font-family: DejaVu Sans, sans-serif;
    }
        @page {
            margin: 0px 0px 0px 0px !important;
            padding: 0px 0px 0px 0px !important;
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
            font-size: 14px;
		}
		td {
			padding:16px;
			background: #f2f2f2;
            color: #202020;
            font-size: 14px;
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
            <img src="data:image/png;base64,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" alt="loga">
        </div>
        <table>
            <thead>
                <tr>
                    <th>@lang('cabinet.story.table.date_time')</th>
                    <th>@lang('cabinet.story.table.name_id')</th>
                    <th>@lang('cabinet.story.table.operation')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($operations as $operation)
                    <tr>
                        <td>{{ $operation::getCurrentDate($operation->created_at) }}</td>
                        <td>
                            {{ $operation->name }} {{ $operation->surname }}
                            @if ($operation->user_show_id)
                                ({{ $operation->user_show_id }})
                            @endif
                        </td>
                        @php
                            switch ($operation->type) {
                                case '0':
                                    $sign = '+';
                                    $type = __('cabinet.story.operations_type.one');
                                    break;
                                case '1':
                                    $sign = '-';
                                    $type = __('cabinet.story.operations_type.two');
                                    break;
                                case '2':
                                    $sign = '';
                                    $type = __('cabinet.story.operations_type.free');
                                    break;
                                case '3':
                                    $sign = '';
                                    $type = __('cabinet.story.operations_type.four');
                                    break;
                                case '4':
                                    $sign = '';
                                    $type = __('cabinet.story.operations_type.five');
                                    break;
                                case '5':
                                    $sign = '+';
                                    $type = __('cabinet.story.operations_type.six');
                                    break;
                                case '6':
                                    $sign = '+';
                                    $type = __('cabinet.story.operations_type.seven');
                                    break;
                                case '7':
                                    $sign = '+';
                                    $type = __('cabinet.story.operations_type.eight');
                                    break;
                                case '8':
                                    $sign = '+';
                                    $type = __('cabinet.story.operations_type.nine');
                                    break;
                                case '11':
                                    $sign = '';
                                    $type = __('cabinet.story.operations_type.eleven');
                                    break;

                                default:
                                    # code...
                                    break;
                            }
                        @endphp
                        <td><span>{{ $type }} <span class="_greened">{{ $sign }}{{ $operation->value }}€</span></span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
