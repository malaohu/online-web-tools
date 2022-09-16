$(document).ready(function() {
    $('#randomGenerate').click(function() {
        var test_1 = /^\d+$/.test($('#randomCount').val());
        var test_2 = /^\d+$/.test($('#randomMinimum').val());
        var test_3 = /^\d+$/.test($('#randomMaximum').val());
        if (parseInt($('#randomMinimum').val()) < 0) {
            $('#randomNumbers').html('最小值必须≥0');
        } else if (test_1 != true || test_2 != true || test_3 != true) {
            $('#randomNumbers').html('(必须)请输入：随机数个数，最大值，最小值');
        } else if (parseInt($('#randomCount').val()) < 1) {
            $('#randomNumbers').html('(必须)随机数个数 ≥ 1');
        } else if (parseInt($('#randomMaximum').val()) < 1) {
            $('#randomNumbers').html('(必须)最大值 ≥1 ');
        } else if (parseInt($('#randomMaximum').val()) <= parseInt($('#randomMinimum').val())) {
            $('#randomNumbers').html('(必须)最大值 ＞ 最小值');
        } else if ($('#randomType').val() == 'unique' && parseInt($('#randomCount').val()) > (parseInt($('#randomMaximum').val()) + 1 - parseInt($('#randomMinimum').val()))) {
            $('#randomNumbers').html('(必须)随机数个数 ≤ (最大值 - 最小值)');
        } else {
            var mTwister = new MersenneTwister();
            var randomNumbers = new Array();
            for (var i = 0; i < parseInt($('#randomCount').val()); i++) {
                var number = (Math.round(mTwister.random() * (parseInt($('#randomMaximum').val()) - parseInt($('#randomMinimum').val()))) + parseInt($('#randomMinimum').val()));
                var found = false;
                for (var j = 0; j < randomNumbers.length; j++) {
                    if (randomNumbers[j] == number) {
                        found = true;
                        break;
                    }
                }
                if (found == true && $('#randomType').val() == 'unique') {
                    i--;
                } else {
                    randomNumbers[i] = number;
                }
            }
            $('#randomNumbers').html('');
            for (var i = 0; i < randomNumbers.length; i++) {
                $('#randomNumbers').html($('#randomNumbers').html() + (i == 0 ? '': ' ') + '<b>' + randomNumbers[i] + '</b>');
            }
        }
    });
});
var MersenneTwister = function(seed) {
    if (seed == undefined) {
        seed = new Date().getTime();
    }
    this.N = 624;
    this.M = 397;
    this.MATRIX_A = 0x9908b0df;
    this.UPPER_MASK = 0x80000000;
    this.LOWER_MASK = 0x7fffffff;
    this.mt = new Array(this.N);
    this.mti = this.N + 1;
    this.init_genrand(seed);
};
MersenneTwister.prototype.init_genrand = function(s) {
    this.mt[0] = s >>> 0;
    for (this.mti = 1; this.mti < this.N; this.mti++) {
        var s = this.mt[this.mti - 1] ^ (this.mt[this.mti - 1] >>> 30);
        this.mt[this.mti] = (((((s & 0xffff0000) >>> 16) * 1812433253) << 16) + (s & 0x0000ffff) * 1812433253) + this.mti;
        this.mt[this.mti] >>>= 0;
    }
};
MersenneTwister.prototype.init_by_array = function(init_key, key_length) {
    var i, j, k;
    this.init_genrand(19650218);
    i = 1;
    j = 0;
    k = (this.N > key_length ? this.N: key_length);
    for (; k; k--) {
        var s = this.mt[i - 1] ^ (this.mt[i - 1] >>> 30);
        this.mt[i] = (this.mt[i] ^ (((((s & 0xffff0000) >>> 16) * 1664525) << 16) + ((s & 0x0000ffff) * 1664525))); + init_key[j] + j;
        this.mt[i] >>>= 0;
        i++;
        j++;
        if (i >= this.N) {
            this.mt[0] = this.mt[this.N - 1];
            i = 1;
        }
        if (j >= key_length) j = 0;
    }
    for (k = this.N - 1; k; k--) {
        var s = this.mt[i - 1] ^ (this.mt[i - 1] >>> 30);
        this.mt[i] = (this.mt[i] ^ (((((s & 0xffff0000) >>> 16) * 1566083941) << 16) + (s & 0x0000ffff) * 1566083941)) - i;
        this.mt[i] >>>= 0;
        i++;
        if (i >= this.N) {
            this.mt[0] = this.mt[this.N - 1];
            i = 1;
        }
    }
    this.mt[0] = 0x80000000;
};
MersenneTwister.prototype.genrand_int32 = function() {
    var y;
    var mag01 = new Array(0x0, this.MATRIX_A);
    if (this.mti >= this.N) {
        var kk;
        if (this.mti == this.N + 1) this.init_genrand(5489);
        for (kk = 0; kk < this.N - this.M; kk++) {
            y = (this.mt[kk] & this.UPPER_MASK) | (this.mt[kk + 1] & this.LOWER_MASK);
            this.mt[kk] = this.mt[kk + this.M] ^ (y >>> 1) ^ mag01[y & 0x1];
        }
        for (; kk < this.N - 1; kk++) {
            y = (this.mt[kk] & this.UPPER_MASK) | (this.mt[kk + 1] & this.LOWER_MASK);
            this.mt[kk] = this.mt[kk + (this.M - this.N)] ^ (y >>> 1) ^ mag01[y & 0x1];
        }
        y = (this.mt[this.N - 1] & this.UPPER_MASK) | (this.mt[0] & this.LOWER_MASK);
        this.mt[this.N - 1] = this.mt[this.M - 1] ^ (y >>> 1) ^ mag01[y & 0x1];
        this.mti = 0;
    }
    y = this.mt[this.mti++];
    y ^= (y >>> 11);
    y ^= (y << 7) & 0x9d2c5680;
    y ^= (y << 15) & 0xefc60000;
    y ^= (y >>> 18);
    return y >>> 0;
};
MersenneTwister.prototype.genrand_int31 = function() {
    return (this.genrand_int32() >>> 1);
};
MersenneTwister.prototype.genrand_real1 = function() {
    return this.genrand_int32() * (1.0 / 4294967295.0);
};
MersenneTwister.prototype.random = function() {
    return this.genrand_int32() * (1.0 / 4294967296.0);
};
MersenneTwister.prototype.genrand_real3 = function() {
    return (this.genrand_int32() + 0.5) * (1.0 / 4294967296.0);
};
MersenneTwister.prototype.genrand_res53 = function() {
    var a = this.genrand_int32() >>> 5,
    b = this.genrand_int32() >>> 6;
    return (a * 67108864.0 + b) * (1.0 / 9007199254740992.0);
};
