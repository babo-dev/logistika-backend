<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyRequest extends Mailable
{
  use Queueable, SerializesModels;
  public $custom_request;
  public $title = 'Täze ýüzlenme', $date = "Sene", $custom_from = "Nireden", $custom_to = "Nirä", $company = "Hususy Kärhana", $status = "Ýagdaýy", $waiting = "Garaşylýar";
  public $cargo = "Haryt", $weight = "Agramy", $cub = "Kub", $budget = "Býudjet", $car_type = "Awtoulag görnüşi", $note = "Bellik";
  public $all_rights = "Ähli Hukuklary Goralan";
  public $button = "Görmek";
  public $cargo_type;
  public $cargo_type_tm = [
    'Adaty ýük', 'Konteýner ýük', 'Bölek ýük', 'Suwuk ýük', 'Beýlekiler'
  ];
  public $cargo_type_ru = [
    'Обычный груз', 'Контейнерный груз', 'Частичный груз', 'Жидкий груз', 'Другое'
  ];
  public $cargo_type_en = [
    'Regular cargo', 'Container cargo', 'Partial cargo', 'Liquid cargo', 'Other'
  ];

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($custom_request, $lang)
  {
    $this->custom_request = $custom_request;
    $this->cargo_type = $this->cargo_type_tm[intval($custom_request->car_type)];
    if ($lang == "Russia") {
      $this->title = "Новый запрос";
      $this->date = "Дата";
      $this->custom_from = "откуда";
      $this->custom_to = "куда";
      $this->company = "Компания";
      $this->status = "Статус";
      $this->waiting = "Ожидание";

      $this->cargo = "Груз";
      $this->weight = "Вес";
      $this->cub = "Куб";
      $this->budget = "Бюджет";
      $this->car_type = "Тип автомобиля";
      $this->note = "Заметка";

      $this->all_rights = "Все права защищены";

      $this->button = "Посмотреть";

      $this->cargo_type = $this->cargo_type_ru[intval($custom_request->car_type)];
    } elseif ($lang != "Turkmenistan") {
      $this->title = "New Request";
      $this->date = "Date";
      $this->custom_from = "From";
      $this->custom_to = "To";
      $this->company = "Company";
      $this->status = "Status";
      $this->waiting = "Waiting";

      $this->cargo = "Cargo";
      $this->weight = "Weight";
      $this->cub = "Cub";
      $this->budget = "Budget";
      $this->car_type = "Car type";
      $this->note = "Note";

      $this->all_rights = "All Rights Reserved";

      $this->button = "Take a look";

      $this->cargo_type = $this->cargo_type_en[intval($custom_request->car_type)];
    }
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->subject($this->title)
      ->view('mail.main');
  }
}
