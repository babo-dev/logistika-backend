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
  public $title='Täze ýüzlenme!', $date = "Date", $custom_from = "Nireden", $custom_to = "Nirä", $company = "Hususy Kärhana", $status = "Ýagdaýy", $waiting = "Garaşylýar";
  public $cargo="Haryt", $weight="Agramy", $cub="Kub", $budget="Býudjet", $car_type="Awtoulag görnüşi", $note="Bellik";
  public $client_name="Müşderi ady", $phone = "Telefon";
  public $all_rights = "Ähli Hukuklary Goralan";
  public $button="Görmek";

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($custom_request, $lang)
  {
    $this->custom_request = $custom_request;
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

      $this->client_name = "Имя клиента";
      $this->phone = "Телефон";

      $this->all_rights = "Все права защищены";

      $this->button = "Посмотреть";
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

      $this->client_name = "Client name";
      $this->phone = "Phone";

      $this->all_rights = "All Rights Reserved";

      $this->button = "Take a look";
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
