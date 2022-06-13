<?php

namespace Database\Seeders;

use App\Models\All_Command_List;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Num{
    private static $num = 0; 
    public static function getSortedNum() : int {
        Num::$num ++;
        return Num::$num;
    }
}


class LinuxCommandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'cd',
            'howtouse' => 'cd dir1/dir2/dir3',
            'process' => 'ディレクトリを移動',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'ls',
            'howtouse' => 'ls dir1',
            'process' => 'ディレクトリの中身のファイル名を表示',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'mv',
            'howtouse' => 'mv from_dir1/file1 to_dir2',
            'process' => 'ファイルを移動',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'cp',
            'howtouse' => 'cp from_dir1/file1 to_dir2',
            'process' => 'ファイルやフォルダをコピーする',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'clear',
            'howtouse' => 'clear',
            'process' => '画面に表示されている文字を消す',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'mkdir',
            'howtouse' => 'mkdir name_dir',
            'process' => 'フォルダを作成する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'touch',
            'howtouse' => 'touch name_file',
            'process' => 'ファイルを作成する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'rmdir',
            'howtouse' => 'rmdir dir1',
            'process' => '空のフォルダを削除する',
        ]);
    
        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'rm',
            'howtouse' => 'rm name_file_or_dir',
            'process' => 'ファイルやフォルダを削除する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'pwd',
            'howtouse' => 'pwd',
            'process' => '現在いる位置を表示する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'find',
            'howtouse' => 'find ./dir1/file_or_file',
            'process' => 'ファイルやディレクトリの検索をする',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'cat',
            'howtouse' => 'cat file',
            'process' => 'ファイルの内容を表示する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'diff',
            'howtouse' => 'diff file1 file2',
            'process' => '2つのテキストファイルを比較し、異なる箇所を出力する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'grep',
            'howtouse' => 'grep keyward file',
            'process' => '指定した文字列がテキスト内に存在した場合その行を抽出する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'chmod',
            'howtouse' => 'chmod file',
            'process' => 'ファイルやフォルダのアクセス権限を変更する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'chown',
            'howtouse' => 'chown owner_change_to file',
            'process' => 'ファイルやフォルダのオーナーやグループを変更する',
        ]);
        
        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'history',
            'howtouse' => 'history',
            'process' => 'コマンドの履歴を表示する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'ln',
            'howtouse' => 'ln dir/file name_link',
            'process' => 'ファイルやフォルダにリンクを設定する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'man',
            'howtouse' => 'man command',
            'process' => 'コマンドのマニュアルを表示する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'apropos',
            'howtouse' => 'apropos keyward',
            'process' => 'manページの内容を検索する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'less',
            'howtouse' => 'less keyward',
            'process' => 'テキストファイルを1画面(行)ずつ表示する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'more',
            'howtouse' => 'more file',
            'process' => 'ファイルをページ単位で閲覧する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'useradd',
            'howtouse' => 'useradd name_user',
            'process' => 'ユーザーを新規作成する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'userdel',
            'howtouse' => 'userdel name_user',
            'process' => 'ユーザーを削除する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'groupadd',
            'howtouse' => 'groupadd name_group',
            'process' => 'グループを新規作成する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'groupdel',
            'howtouse' => 'groupdel name_group',
            'process' => 'グループを削除する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'chfn',
            'howtouse' => 'chfn name_group',
            'process' => 'ユーザーの情報を変更する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'free',
            'howtouse' => 'free',
            'process' => '空きメモリや、使用中メモリを表示する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'last',
            'howtouse' => 'last',
            'process' => '最近ログインしたユーザー名を表示する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'finger',
            'howtouse' => 'finger user',
            'process' => 'ユーザー情報を表示する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'route',
            'howtouse' => 'route',
            'process' => 'ルーティングの表示や設定を行う',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'ftp',
            'howtouse' => 'ftp from_dir/file to_dir',
            'process' => 'ファイルをFTPで転送する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => true,
            'command' => 'scp',
            'howtouse' => 'scp from_dir/file to_dir',
            'process' => 'ファイルをSFTPで転送する',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => false,
            'command' => 'tab',
            'howtouse' => 'tab',
            'process' => 'フォルダやファイル名の予測変換',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => false,
            'command' => 'ctr+a',
            'howtouse' => 'ctr+a',
            'process' => 'カーソルを先頭に移動',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => false,
            'command' => 'ctr+e',
            'howtouse' => 'ctr+e',
            'process' => 'カーソルを終端に移動',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => false,
            'command' => 'ctr+b',
            'howtouse' => 'ctr+b',
            'process' => 'カーソルを一文字戻す',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => false,
            'command' => 'ctr+f',
            'howtouse' => 'ctr+f',
            'process' => 'カーソルを一文字進める',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => false,
            'command' => 'ctr+d',
            'howtouse' => 'ctr+d',
            'process' => 'カーソル位置の文字を消す
            ',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => false,
            'command' => 'ctr+h',
            'howtouse' => 'ctr+h',
            'process' => 'カーソル位置の左側の文字を消す',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => false,
            'command' => 'ctr+w',
            'howtouse' => 'ctr+w',
            'process' => 'カーソル位置の左側の単語を消す',
        ]);

        All_Command_List::firstOrCreate([
            'id' => Num::getSortedNum(),
            'iscommand' => false,
            'command' => 'ctr+r',
            'howtouse' => 'ctr+r keyward',
            'process' => 'コマンド履歴の中で検索する',
        ]);
    }
}

