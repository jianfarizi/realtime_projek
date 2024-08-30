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
    }
    
    public function updatestatus($newstatus)
    {
      $laporan = Laporan::find($this->laporanId);
        
        $laporan = Laporan::find($this->laporanId);
        $laporan->status = $newstatus;
        $laporan->save();

        $this->status = $newstatus;
        $this->setstatus();
        
    }

    public function setstatus()
    {
        switch ($this->status) {
            case 'pending':
                $this->setstatus = 'btn btn-danger';
                break;
            case 'procecing':
                $this->setstatus = 'btn btn-warning';
                break;
            case 'done':
                $this->setstatus = 'btn btn-succes';
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
