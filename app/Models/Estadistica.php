<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadistica extends Model
{
    use HasFactory;
    protected $table = 'pa_estadistica';
    /*
    -- Establecer el primer día de la semana como lunes (1)
    SET DATEFIRST 1;

    -- Obtener la fecha actual
    DECLARE @fecha_actual DATE = GETDATE();

    -- Obtener la fecha de inicio de la semana actual
    DECLARE @fecha_inicio_semana DATE = DATEADD(DAY, 1 - DATEPART(WEEKDAY, @fecha_actual), @fecha_actual);

    -- Obtener la fecha de fin de la semana actual
    DECLARE @fecha_fin_semana DATE = DATEADD(DAY, 7 - DATEPART(WEEKDAY, @fecha_actual), @fecha_actual);

    -- Mostrar las fechas de inicio y fin de la semana actual
    SELECT @fecha_inicio_semana AS Fecha_Inicio_Semana, @fecha_fin_semana AS Fecha_Fin_Semana;

    */
}
