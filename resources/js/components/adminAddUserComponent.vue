<template>
	<div class="modal-dialog">
                                    <form class="add-new-user modal-content pt-0" novalidate="novalidate">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                        <div class="modal-header mb-1">
                                            <h5 class="modal-title" id="exampleModalLabel">New User</h5>
                                        </div>
                                        <div class="modal-body flex-grow-1">
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                                <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" name="user-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-icon-default-uname">Username</label>
                                                <input type="text" id="basic-icon-default-uname" class="form-control dt-uname" placeholder="Web Developer" aria-label="jdoe1" aria-describedby="basic-icon-default-uname2" name="user-name">
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basic-icon-default-email">Email</label>
                                                <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" aria-describedby="basic-icon-default-email2" name="user-email">
                                                <small class="form-text"> You can use letters, numbers &amp; periods </small>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="user-role">User Role</label>
                                                <select id="user-role" class="form-select">
                                                    <option value="subscriber">Subscriber</option>
                                                    <option value="editor">Editor</option>
                                                    <option value="maintainer">Maintainer</option>
                                                    <option value="author">Author</option>
                                                    <option value="admin">Admin</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="user-plan">Select Plan</label>
                                                <select id="user-plan" class="form-select">
                                                    <option value="basic">Basic</option>
                                                    <option value="enterprise">Enterprise</option>
                                                    <option value="company">Company</option>
                                                    <option value="team">Team</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary me-1 data-submit waves-effect waves-float waves-light">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
</template>