<template>

	<main>
		<div class="sidenav-overlay"></div>
        <div class="drag-target"></div>
	<footer class="footer footer-static footer-light">
            <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; {{fullYear}}<a class="ms-25" href="#" target="_blank">{{$root.appName}}</a><span class="d-none d-sm-inline-block">, All rights Reserved.</span></span>
                <span class="float-md-end d-none d-md-block"><ul  class="list-unstyled social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
                            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="facebook"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="twitter"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-p"></i></a></li>
                            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-in"></i></a></li>
                        </ul></span>
            </p>
        </footer>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
	</main>
</template>
<script>
import moment from 'moment'
export default {
    
    computed: {
        fullYear() {
            return moment().get('year')
        }
    },
}

</script>
<style scoped>
    .footer::before {
    background-color: unset;
}
</style>