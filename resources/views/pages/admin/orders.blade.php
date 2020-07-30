<x-admin.header/>

<div id="content">
    <section>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card no-shadow" style="overflow: visible">
                        <div class="card-head">
                            <header>
                                Заказы
                            </header>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="overflow: visible">
                                <table id="orders" class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th class="sort-numeric">№</th>
                                        <th class="sort-alpha">Статус</th>
                                        <th>Дата заказа</th>
                                        <th>Информация о заказе</th>
                                        <th class="sort-numeric">Сумма</th>
                                        <th>Дата доставки</th>
                                        <th>Курьер</th>
                                        <th class="sort-alpha">Данные покупателя</th>
                                        <th class="sort-numeric">После. изменение</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr class="gradeX clickable-row" data-href="{{ route('admin_order', $order->id) }}">
                                            <td>{{ $order->id }}</td>
                                            <td>{{ __('order_status.' . $order->status) }}</td>
                                            <td>{{ date('d.m.Y H:i',strtotime($order->created_at)) }}</td>

                                            <td class="order-hover">
                                                Информация о заказе
                                                <div class="card order-card-hover" style="z-index: 5">
                                                    <div class="card-body no-padding">
                                                        <ul class="list">
                                                            @foreach($order->items as $item)
                                                                <li class="tile">
                                                                    <div class="tile-content">
                                                                        <div class="tile-icon">
                                                                            ID: {{ $item->product_id }}
                                                                        </div>
                                                                        <div class="tile-text">
                                                                            {{ $item->product->name }}
                                                                            <small>
                                                                                {{ $item->quantity }} шт
                                                                                * {{ $item->price / 100 }} руб
                                                                                = {{ $item->getSum() / 100 }} руб
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $order->getSum() / 100 }} руб</td>
                                            <td>Доставка</td>
                                            <td>Назначен</td>
                                            <td>{{ $order->full_name }}</td>
                                            <td>{{ date('d.m.Y H:i',strtotime($order->updated_at)) }}</td>
                                            <td class="remove"
                                                data-toggle="tooltip" data-placement="bottom"
                                                data-trigger="hover"
                                                data-original-title="Удалить">
                                                <a href="#" class="btn btn-flat ink-reaction btn-danger"
                                                   data-action=""
                                                   data-text="позицию"
                                                   data-toggle="modal" data-target="#deleteModal">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<x-admin.footer/>
