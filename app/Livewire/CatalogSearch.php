<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class CatalogSearch extends Component
{
    public $search = '';
    public $page = 1;
    public $data;
    public $perPage = 12;
    public $category;

    public function mount()
    {
        if(Request::query('search')){
            $this->search = Request::query('search', '');
            $this->updateSearch($this->search);
        }else {
            if(!empty($this->category)){
                $this->data = $this->category;
            }else {
                $this->data = Product::all();
            }
        }

    }

    public function nextPage()
    {
        $this->page++;

    }

    public function previousPage()
    {
        if ($this->page > 1) {
            $this->page--;
        }
    }

    public function updateSearch()
    {

        $this->data = Product::search($this->search,'nama');
        $this->page = 1;
    }

    public function render()
    {
        $products = Product::paginate($this->page, $this->perPage, $this->data);
        return view('livewire.catalog-search', [
            'products' => $products['data'],
            'totalPages' => $products['total_pages'],
            'currentPage' => $products['current_page'],
        ]);
    }
}
