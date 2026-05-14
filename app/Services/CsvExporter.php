<?php

namespace App\Services;

class CsvExporter
{
    public function export($data, $filename)
    {
        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = ['ID Paciente', 'Paciente', 'Medico', 'Fecha', 'Motivo', 'Sala', 'Estado'];

        $callback = function() use($data, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($data as $item) {
                fputcsv($file, [
                    $item->paciente->dni,
                    $item->paciente->nombre,
                    $item->medico->nombre,
                    $item->fecha_hora,
                    $item->motivo,
                    $item->sala_nombre,
                    $item->estado,
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
