<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Laporan;

class LaporanUpdate extends Component
{
    public $status;
    public $laporanId;
    public $setstatus;

    public function mount($laporanId, $status)
    {
        $this->laporanId = $laporanId;
        $this->status = $status;
        $this->setstatus();
    }

    public function updatestatus()
    {
        $laporan = Laporan::find($this->laporanId);
        if ($laporan) {
            $laporan->status = $this->status;
            $laporan->save();
            $this->setstatus();
        }
    }

    public function setstatus()
    {
        switch ($this->status) {
            case 'pending':
                $this->setstatus = 'btn btn-danger';
                break;
            case 'processing':
                $this->setstatus = 'btn btn-warning';
                break;
            case 'done':
                $this->setstatus = 'btn btn-success';
                break;
            default:
                $this->setstatus = 'btn btn-secondary';
        }
    }

    public function render()
    {
        return view('livewire.laporan-update');
    }
}
