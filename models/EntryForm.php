<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 03.08.2016
 * Time: 11:05
 */

namespace app\models;



use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
//    public $checkbox = ['OneQ', 'TwoQ', 'ThreeQ'];

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
             ['email', 'email']

        ];
    }
}