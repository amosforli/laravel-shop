// 从安装的数据库中加载城市数据
const addressData = require('china-area-data/v3/data');

import _ from 'lodash';

Vue.component('select-district', {
    props: {
        initValue: {
            type: Array,
            default: () => ([]),
        }
    },

    data() {
        return {
            provinces: addressData['86'], // 省列表
            cities: {}, // 城市列表
            districts: {}, // 地区列表
            provinceId: '', // 当前选中的省
            cityId: '', // 当前选中的市
            districtId: '', // 当前选中的区
        };
    },
    watch: {
         // 省改变
        provinceId(newVal) {
            if (!newVal) {
                this.cities = {};
                this.cityId = '';
                return;
            }

            this.cities = addressData[newVal];

            if (!this.cities[this.cityId]) {
                this.cityId = '';
            }
        },
        // 城市改变
        cityId(newVal) {
            if (!newVal) {
                this.districts = {};
                this.districtId = '';
                return;
            }
            this.districts = addressData[newVal];

            if (!this.districts[this.districtId]) {
                this.districtId = '';
            }
        },
        // 地区改变
        districtId() {
            this.$emit('change', [this.provinces[this.provinceId], this.cities[this.cityId], this.districts[this.districtId]]);
        }
    },
    created() {
        this.setFromValue(this.initValue);
    },
    methods: {
        setFromValue(value) {
            value = _.filter(value);

            if (value.length === 0) {
                this.provinceId = '';
                return;
            }

            const provinceId = _.findKey(this.provinces, o => o === value[0]);
            if (!provinceId) {
                this.provinceId = '';
                return;
            }
            this.provinceId = provinceId;

            const cityId = _.findKey(addressData[provinceId], o => o === value[1]);
            if (!cityId) {
                this.cityId = '';
                return;
            }
            this.cityId = cityId;

            const districtId = _.findKey(addressData[cityId], o => o === value[2]);
            if (!districtId) {
                this.districtId = '';
                return;
            }

            this.districtId = districtId;
        }
    }
});