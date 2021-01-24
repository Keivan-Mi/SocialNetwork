<template>
    <div class="col-9 pt-5 align pl-0">
        <!-- Show username and button -->
        <div class=" d-flex justify-content-between align-items-baseline">
            <div class="d-flex align-items-center pb-1">
                <div class="font-weight-bold mr-4 h4 pt-2"> {{this.username}}</div>
                <button v-if=" ownprofile_d === ''" class="btn btn-primary ml-4"  @click="followUser" v-text="buttonText"></button>
            </div>
        </div>

        <!-- Show the number of posts,followers,following -->
        <div class="d-flex align-items-left">
            <div class="pr-3"><strong>{{this.posts_d}}</strong> posts</div>
            <div class="pr-3"><strong>{{this.followers_d}}</strong> followers</div>
            <div class="pr-3"><strong>{{this.following_d}}</strong> following</div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'follow', 'username', 'posts', 'followers', 'following', 'ownprofile'],

        data: function () {
            return {
                status: this.follow,
                posts_d: this.posts,
                followers_d: this.followers,
                following_d: this.following,
                ownprofile_d: this.ownprofile,
            }
        },
        methods: {
            followUser() {
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        this.status = !this.status;
                        this.posts_d = response.data.posts;
                        this.followers_d = response.data.follower;
                        this.following_d = response.data.following;
                    })
                    .catch(errors => {
                        if (errors.response.status == 401) {
                            window.location = '/login';
                        }
                    });
            }
        },
        computed: {
            buttonText() {
                if (this.status)
                    return 'Unfollow';
                else
                    return 'Follow';

            }
        }
    }
</script>
