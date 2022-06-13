@extends('layouts.app')

@section('content')

@foreach ($reviewCommands as $key => $value)
    @foreach($allCommands as $key => $value)
        @if ($reviewCommands[$key]['id_review'] === $allCommands[$key]['id'])
            <form>
                {{ $allCommands[$key]['command'].$allCommands[$key]['howtouse'].$allCommands[$key]['process'] }}
            </form>
            @break
        @endif
    @endforeach
@endforeach

{{ 
    $array1 = [1,2,3,4,5];
    $array2 = [6,7,8,9,10];

    foreach($array1 as $value1){
        foreach($array2 as $value2) {
            return $value1.$value2;
        }
    }


    echo 'hellop';

}}




<!-- 
review_command_list

----+-----------+---------------------+---------------------+
| id | id_review | created_at          | updated_at          |
+----+-----------+---------------------+---------------------+
|  1 |         1 | 2022-06-13 01:07:12 | 2022-06-13 01:07:12 |
|  2 |         3 | 2022-06-13 01:07:14 | 2022-06-13 01:07:14 |
|  3 |        12 | 2022-06-13 01:07:17 | 2022-06-13 01:07:17 |
|  4 |        36 | 2022-06-13 01:07:26 | 2022-06-13 01:07:26 | 

all_command_lists

+----+-----------+----------+----------------------------+------------------------------+---------------------+---------------------+
| id | iscommand | command  | howtouse                   | process                      | created_at          | updated_at          |
+----+-----------+----------+----------------------------+------------------------------+---------------------+---------------------+
|  1 |         1 | cd       | cd dir1/dir2/dir3          | ?????????                    | 2022-06-13 01:06:19 | 2022-06-13 01:06:19 |
|  2 |         1 | ls       | ls dir1                    | ??????????????????           | 2022-06-13 01:06:19 | 2022-06-13 01:06:19 |
|  3 |         1 | mv       | mv from_dir1/file1 to_dir2 | ???????                      | 2022-06-13 01:06:19 | 2022-06-13 01:06:19 |
|  4 |         1 | cp       | cp from_dir1/file1 to_dir2 | ???????????????              | 2022-06-13 01:06:19 | 2022-06-13 01:06:19 |
|  5 |         1 | clear    | clear                      | ???????????????              | 2022-06-13 01:06:19 | 2022-06-13 01:06:19 |
|  6 |         1 | mkdir    | mkdir name_dir             | ?????????                    | 2022-06-13 01:06:19 | 2022-06-13 01:06:19 |
|  7 |         1 | touch    | touch name_file            | ?????????                    | 2022-06-13 01:06:19 | 2022-06-13 01:06:19 |
|  8 |         1 | rmdir    | rmdir dir1                 | ???????????                  | 2022-06-13 01:06:19 | 2022-06-13 01:06:19 |
|  9 |         1 | rm       | rm name_file_or_dir        | ??????????????               | 2022-06-13 01:06:19 | 2022-06-13 01:06:19 |
| 10 |         1 | pwd      | pwd                        | ???????????                  | 2022-06-13 01:06:19 | 2022-06-13 01:06:19 |
| 11 |         1 | find     | find ./dir1/file_or_file   | ?????????????????            | 2022-06-13 01:06:19 | 2022-06-13 01:06:19 |

                                          ...
-->