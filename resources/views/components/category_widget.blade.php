<div class="widget utf-sidebar-widget-item">
    <div class="utf-boxed-list-headline-item">
        <h3>Emlak Kategorisi</h3>
        <div class="utf-sidebar-categorie">
            <ul>
                @foreach(\App\Models\Category::all() as $category)
                <li><a href="{{route('product.filter',['category'=>$category->KATEGORI_ID])}}">{{$category->KATEGORI}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
