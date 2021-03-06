<?php

namespace credits\Entities;

class Extract extends \Eloquent{

    protected $fillable = [ 'nit',
                            'numero_documento',
                            'punto_venta',
                            'tasa_interes',
                            'valor_compra',
                            'cargos_abonos',
                            'saldo_credito_diferido',
                            'cuotas',
                            'dias_vencidos',
                            'saldo_sin_vencer',
                            'un_mes',
                            'dos_meses',
                            'tres_meses',
                            'created_at',
                            'updated_at',
                            'fecha_contabilizacion',
                            'mas_tres'
                          ];

}