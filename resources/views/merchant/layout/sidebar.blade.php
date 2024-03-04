<x-link-group>
	<x-link icon="home" path="home">{{ __('Dashborad') }}</x-link>
</x-link-group>

<x-link-group name="Orders" expend>
	<x-link icon="shopping-cart" path="merchant.orders">{{ __('Orders') }}</x-link>
	<x-link icon="users" path="merchant.customers">{{ __('Customers') }}</x-link>
	<x-link icon="cursor-arrow-ripple" path="merchant.integrations">{{ __('Sales channels') }}</x-link>
	<x-link icon="adjustments-horizontal" path="merchant.order-form">{{ __('Order Forms') }}</x-link>
</x-link-group>

<x-link-group name="Inventory" expend>
	<x-link icon="building-office" path="merchant.warehouses">{{ __('Warhouses') }}</x-link>
	<x-link icon="arrows-right-left" path="merchant.transfers">{{ __('Transfers') }}</x-link>
	<x-link icon="archive-box" path="merchant.products">{{ __('Products') }}</x-link>
</x-link-group>

<x-link-group name="Finance" expend>
	<x-link icon="credit-card" path="merchant.payment">{{ __('Payement') }}</x-link>
	<x-link icon="banknotes" path="merchant.expenses">{{ __('Expenses') }}</x-link>
</x-link-group>

<x-link-group name="Inbox">
	<x-link icon="chat-bubble-left-right" path="merchant.payment">{{ __('Messages') }}</x-link>
	<x-link icon="link" path="merchant.partnership.*">
		<span>{{ __('Partnerships') }}</span>
		
		<x-slot name="children">
			<x-link icon="truck" path="merchant.partnership.deliverers">{{ __('Deliverers') }}</x-link>
			<x-link icon="credit-card" path="merchant.partnership.freelancers">{{ __('Freelancers') }}</x-link>
		</x-slot>
	</x-link>
</x-link-group>

<x-link-group name="Settings">
	<x-link icon="list-bullet" path="merchant.balance.history">{{ __('Balance history') }}</x-link>
</x-link-group>

<x-link-group name="Offers">
	<x-link icon="building-storefront" path="merchant.services">{{ __('Services') }}</x-link>
	<x-link icon="ticket" path="merchant.support">{{ __('Support') }}</x-link>
</x-link-group>
