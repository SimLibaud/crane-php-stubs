<?php

// Start of posix v.7.0.4-7ubuntu2

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Send a signal to a process
 * @link http://php.net/manual/en/function.posix-kill.php
 * @param int $pid <p>
 * The process identifier.
 * </p>
 * @param int $sig <p>
 * One of the PCNTL signals constants.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_kill(int $pid, int $sig): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Return the current process identifier
 * @link http://php.net/manual/en/function.posix-getpid.php
 * @return int the identifier, as an integer.
 */
function posix_getpid(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Return the parent process identifier
 * @link http://php.net/manual/en/function.posix-getppid.php
 * @return int the identifier, as an integer.
 */
function posix_getppid(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Return the real user ID of the current process
 * @link http://php.net/manual/en/function.posix-getuid.php
 * @return int the user id, as an integer
 */
function posix_getuid(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Set the UID of the current process
 * @link http://php.net/manual/en/function.posix-setuid.php
 * @param int $uid <p>
 * The user id.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_setuid(int $uid): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Return the effective user ID of the current process
 * @link http://php.net/manual/en/function.posix-geteuid.php
 * @return int the user id, as an integer
 */
function posix_geteuid(): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Set the effective UID of the current process
 * @link http://php.net/manual/en/function.posix-seteuid.php
 * @param int $uid <p>
 * The user id.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_seteuid(int $uid): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Return the real group ID of the current process
 * @link http://php.net/manual/en/function.posix-getgid.php
 * @return int the real group id, as an integer.
 */
function posix_getgid(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Set the GID of the current process
 * @link http://php.net/manual/en/function.posix-setgid.php
 * @param int $gid <p>
 * The group id.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_setgid(int $gid): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Return the effective group ID of the current process
 * @link http://php.net/manual/en/function.posix-getegid.php
 * @return int an integer of the effective group ID.
 */
function posix_getegid(): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Set the effective GID of the current process
 * @link http://php.net/manual/en/function.posix-setegid.php
 * @param int $gid <p>
 * The group id.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_setegid(int $gid): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Return the group set of the current process
 * @link http://php.net/manual/en/function.posix-getgroups.php
 * @return array an array of integers containing the numeric group ids of the group
 * set of the current process.
 */
function posix_getgroups(): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Return login name
 * @link http://php.net/manual/en/function.posix-getlogin.php
 * @return string the login name of the user, as a string.
 */
function posix_getlogin(): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Return the current process group identifier
 * @link http://php.net/manual/en/function.posix-getpgrp.php
 * @return int the identifier, as an integer.
 */
function posix_getpgrp(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Make the current process a session leader
 * @link http://php.net/manual/en/function.posix-setsid.php
 * @return int the session id, or -1 on errors.
 */
function posix_setsid(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Set process group id for job control
 * @link http://php.net/manual/en/function.posix-setpgid.php
 * @param int $pid <p>
 * The process id.
 * </p>
 * @param int $pgid <p>
 * The process group id.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_setpgid(int $pid, int $pgid): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Get process group id for job control
 * @link http://php.net/manual/en/function.posix-getpgid.php
 * @param int $pid <p>
 * The process id.
 * </p>
 * @return int the identifier, as an integer.
 */
function posix_getpgid(int $pid): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Get the current sid of the process
 * @link http://php.net/manual/en/function.posix-getsid.php
 * @param int $pid <p>
 * The process identifier. If set to 0, the current process is
 * assumed. If an invalid <i>pid</i> is
 * specified, then <b>FALSE</b> is returned and an error is set which
 * can be checked with <b>posix_get_last_error</b>.
 * </p>
 * @return int the identifier, as an integer.
 */
function posix_getsid(int $pid): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Get system name
 * @link http://php.net/manual/en/function.posix-uname.php
 * @return array a hash of strings with information about the
 * system. The indices of the hash are
 * sysname - operating system name (e.g. Linux)
 * nodename - system name (e.g. valiant)
 * release - operating system release (e.g. 2.2.10)
 * version - operating system version (e.g. #4 Tue Jul 20
 * 17:01:36 MEST 1999)
 * machine - system architecture (e.g. i586)
 * domainname - DNS domainname (e.g. example.com)
 * </p>
 * <p>
 * domainname is a GNU extension and not part of POSIX.1, so this
 * field is only available on GNU systems or when using the GNU
 * libc.
 */
function posix_uname(): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Get process times
 * @link http://php.net/manual/en/function.posix-times.php
 * @return array a hash of strings with information about the current
 * process CPU usage. The indices of the hash are:
 * ticks - the number of clock ticks that have elapsed since
 * reboot.
 * utime - user time used by the current process.
 * stime - system time used by the current process.
 * cutime - user time used by current process and children.
 * cstime - system time used by current process and children.
 */
function posix_times(): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Get path name of controlling terminal
 * @link http://php.net/manual/en/function.posix-ctermid.php
 * @return string Upon successful completion, returns string of the pathname to
 * the current controlling terminal. Otherwise <b>FALSE</b> is returned and errno
 * is set, which can be checked with <b>posix_get_last_error</b>.
 */
function posix_ctermid(): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Determine terminal device name
 * @link http://php.net/manual/en/function.posix-ttyname.php
 * @param mixed $fd
 * @return string On success, returns a string of the absolute path of the
 * <i>fd</i>. On failure, returns <b>FALSE</b>
 */
function posix_ttyname($fd): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Determine if a file descriptor is an interactive terminal
 * @link http://php.net/manual/en/function.posix-isatty.php
 * @param mixed $fd
 * @return bool <b>TRUE</b> if <i>fd</i> is an open descriptor connected
 * to a terminal and <b>FALSE</b> otherwise.
 */
function posix_isatty($fd): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Pathname of current directory
 * @link http://php.net/manual/en/function.posix-getcwd.php
 * @return string a string of the absolute pathname on success.
 * On error, returns <b>FALSE</b> and sets errno which can be checked with
 * <b>posix_get_last_error</b>.
 */
function posix_getcwd(): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Create a fifo special file (a named pipe)
 * @link http://php.net/manual/en/function.posix-mkfifo.php
 * @param string $pathname <p>
 * Path to the FIFO file.
 * </p>
 * @param int $mode <p>
 * The second parameter <i>mode</i> has to be given in
 * octal notation (e.g. 0644). The permission of the newly created
 * FIFO also depends on the setting of the current
 * <b>umask</b>. The permissions of the created file are
 * (mode &#38;#38; ~umask).
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_mkfifo(string $pathname, int $mode): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * Create a special or ordinary file (POSIX.1)
 * @link http://php.net/manual/en/function.posix-mknod.php
 * @param string $pathname <p>
 * The file to create
 * </p>
 * @param int $mode <p>
 * This parameter is constructed by a bitwise OR between file type (one of
 * the following constants: <b>POSIX_S_IFREG</b>,
 * <b>POSIX_S_IFCHR</b>, <b>POSIX_S_IFBLK</b>,
 * <b>POSIX_S_IFIFO</b> or
 * <b>POSIX_S_IFSOCK</b>) and permissions.
 * </p>
 * @param int $major [optional] <p>
 * The major device kernel identifier (required to pass when using
 * <b>S_IFCHR</b> or <b>S_IFBLK</b>).
 * </p>
 * @param int $minor [optional] <p>
 * The minor device kernel identifier.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_mknod(string $pathname, int $mode, int $major = 0, int $minor = 0): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * Determine accessibility of a file
 * @link http://php.net/manual/en/function.posix-access.php
 * @param string $file <p>
 * The name of the file to be tested.
 * </p>
 * @param int $mode [optional] <p>
 * A mask consisting of one or more of <b>POSIX_F_OK</b>,
 * <b>POSIX_R_OK</b>, <b>POSIX_W_OK</b> and
 * <b>POSIX_X_OK</b>.
 * </p>
 * <p>
 * <b>POSIX_R_OK</b>, <b>POSIX_W_OK</b> and
 * <b>POSIX_X_OK</b> request checking whether the file
 * exists and has read, write and execute permissions, respectively.
 * <b>POSIX_F_OK</b> just requests checking for the
 * existence of the file.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_access(string $file, int $mode = POSIX_F_OK): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Return info about a group by name
 * @link http://php.net/manual/en/function.posix-getgrnam.php
 * @param string $name <p>The name of the group</p>
 * @return array The array elements returned are:
 * <table>
 * The group information array
 * <tr valign="top">
 * <td>Element</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>
 * The name element contains the name of the group. This is
 * a short, usually less than 16 character "handle" of the
 * group, not the real, full name. This should be the same as
 * the <i>name</i> parameter used when
 * calling the function, and hence redundant.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>passwd</td>
 * <td>
 * The passwd element contains the group's password in an
 * encrypted format. Often, for example on a system employing
 * "shadow" passwords, an asterisk is returned instead.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gid</td>
 * <td>
 * Group ID of the group in numeric form.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>members</td>
 * <td>
 * This consists of an array of
 * string's for all the members in the group.
 * </td>
 * </tr>
 * </table>
 */
function posix_getgrnam(string $name): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Return info about a group by group id
 * @link http://php.net/manual/en/function.posix-getgrgid.php
 * @param int $gid <p>
 * The group id.
 * </p>
 * @return array The array elements returned are:
 * <table>
 * The group information array
 * <tr valign="top">
 * <td>Element</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>
 * The name element contains the name of the group. This is
 * a short, usually less than 16 character "handle" of the
 * group, not the real, full name.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>passwd</td>
 * <td>
 * The passwd element contains the group's password in an
 * encrypted format. Often, for example on a system employing
 * "shadow" passwords, an asterisk is returned instead.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gid</td>
 * <td>
 * Group ID, should be the same as the
 * <i>gid</i> parameter used when calling the
 * function, and hence redundant.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>members</td>
 * <td>
 * This consists of an array of
 * string's for all the members in the group.
 * </td>
 * </tr>
 * </table>
 */
function posix_getgrgid(int $gid): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Return info about a user by username
 * @link http://php.net/manual/en/function.posix-getpwnam.php
 * @param string $username <p>
 * An alphanumeric username.
 * </p>
 * @return array On success an array with the following elements is returned, else
 * <b>FALSE</b> is returned:
 * <table>
 * The user information array
 * <tr valign="top">
 * <td>Element</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>
 * The name element contains the username of the user. This is
 * a short, usually less than 16 character "handle" of the
 * user, not the real, full name. This should be the same as
 * the <i>username</i> parameter used when
 * calling the function, and hence redundant.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>passwd</td>
 * <td>
 * The passwd element contains the user's password in an
 * encrypted format. Often, for example on a system employing
 * "shadow" passwords, an asterisk is returned instead.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>uid</td>
 * <td>
 * User ID of the user in numeric form.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gid</td>
 * <td>
 * The group ID of the user. Use the function
 * <b>posix_getgrgid</b> to resolve the group
 * name and a list of its members.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gecos</td>
 * <td>
 * GECOS is an obsolete term that refers to the finger
 * information field on a Honeywell batch processing system.
 * The field, however, lives on, and its contents have been
 * formalized by POSIX. The field contains a comma separated
 * list containing the user's full name, office phone, office
 * number, and home phone number. On most systems, only the
 * user's full name is available.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>dir</td>
 * <td>
 * This element contains the absolute path to the home
 * directory of the user.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>shell</td>
 * <td>
 * The shell element contains the absolute path to the
 * executable of the user's default shell.
 * </td>
 * </tr>
 * </table>
 */
function posix_getpwnam(string $username): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Return info about a user by user id
 * @link http://php.net/manual/en/function.posix-getpwuid.php
 * @param int $uid <p>
 * The user identifier.
 * </p>
 * @return array an associative array with the following elements:
 * <table>
 * The user information array
 * <tr valign="top">
 * <td>Element</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>
 * The name element contains the username of the user. This is
 * a short, usually less than 16 character "handle" of the
 * user, not the real, full name.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>passwd</td>
 * <td>
 * The passwd element contains the user's password in an
 * encrypted format. Often, for example on a system employing
 * "shadow" passwords, an asterisk is returned instead.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>uid</td>
 * <td>
 * User ID, should be the same as the
 * <i>uid</i> parameter used when calling the
 * function, and hence redundant.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gid</td>
 * <td>
 * The group ID of the user. Use the function
 * <b>posix_getgrgid</b> to resolve the group
 * name and a list of its members.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gecos</td>
 * <td>
 * GECOS is an obsolete term that refers to the finger
 * information field on a Honeywell batch processing system.
 * The field, however, lives on, and its contents have been
 * formalized by POSIX. The field contains a comma separated
 * list containing the user's full name, office phone, office
 * number, and home phone number. On most systems, only the
 * user's full name is available.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>dir</td>
 * <td>
 * This element contains the absolute path to the
 * home directory of the user.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>shell</td>
 * <td>
 * The shell element contains the absolute path to the
 * executable of the user's default shell.
 * </td>
 * </tr>
 * </table>
 */
function posix_getpwuid(int $uid): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Return info about system resource limits
 * @link http://php.net/manual/en/function.posix-getrlimit.php
 * @return array an associative array of elements for each
 * limit that is defined. Each limit has a soft and a hard limit.
 * <table>
 * List of possible limits returned
 * <tr valign="top">
 * <td>Limit name</td>
 * <td>Limit description</td>
 * </tr>
 * <tr valign="top">
 * <td>core</td>
 * <td>
 * The maximum size of the core file. When 0, not core files are
 * created. When core files are larger than this size, they will
 * be truncated at this size.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>totalmem</td>
 * <td>
 * The maximum size of the memory of the process, in bytes.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>virtualmem</td>
 * <td>
 * The maximum size of the virtual memory for the process, in bytes.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>data</td>
 * <td>
 * The maximum size of the data segment for the process, in bytes.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>stack</td>
 * <td>
 * The maximum size of the process stack, in bytes.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>rss</td>
 * <td>
 * The maximum number of virtual pages resident in RAM
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>maxproc</td>
 * <td>
 * The maximum number of processes that can be created for the
 * real user ID of the calling process.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>memlock</td>
 * <td>
 * The maximum number of bytes of memory that may be locked into RAM.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>cpu</td>
 * <td>
 * The amount of time the process is allowed to use the CPU.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>filesize</td>
 * <td>
 * The maximum size of the data segment for the process, in bytes.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>openfiles</td>
 * <td>
 * One more than the maximum number of open file descriptors.
 * </td>
 * </tr>
 * </table>
 */
function posix_getrlimit(): array {}

/**
 * (PHP 7)<br/>
 * Set system resource limits
 * @link http://php.net/manual/en/function.posix-setrlimit.php
 * @param int $resource <p>
 * The
 * resource limit constant
 * corresponding to the limit that is being set.
 * </p>
 * @param int $softlimit <p>
 * The soft limit, in whatever unit the resource limit requires, or
 * <b>POSIX_RLIMIT_INFINITY</b>.
 * </p>
 * @param int $hardlimit <p>
 * The hard limit, in whatever unit the resource limit requires, or
 * <b>POSIX_RLIMIT_INFINITY</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_setrlimit(int $resource, int $softlimit, int $hardlimit): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * Retrieve the error number set by the last posix function that failed
 * @link http://php.net/manual/en/function.posix-get-last-error.php
 * @return int the errno (error number) set by the last posix function that
 * failed. If no errors exist, 0 is returned.
 */
function posix_get_last_error(): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * Alias of <b>posix_get_last_error</b>
 * @link http://php.net/manual/en/function.posix-errno.php
 */
function posix_errno() {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * Retrieve the system error message associated with the given errno
 * @link http://php.net/manual/en/function.posix-strerror.php
 * @param int $errno <p>
 * A POSIX error number, returned by
 * <b>posix_get_last_error</b>. If set to 0, then the
 * string "Success" is returned.
 * </p>
 * @return string the error message, as a string.
 */
function posix_strerror(int $errno): string {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * Calculate the group access list
 * @link http://php.net/manual/en/function.posix-initgroups.php
 * @param string $name <p>
 * The user to calculate the list for.
 * </p>
 * @param int $base_group_id <p>
 * Typically the group number from the password file.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_initgroups(string $name, int $base_group_id): bool {}


/**
 * Check whether the file exists.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_F_OK', 0);

/**
 * Check whether the file exists and has execute permissions.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_X_OK', 1);

/**
 * Check whether the file exists and has write permissions.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_W_OK', 2);

/**
 * Check whether the file exists and has read permissions.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_R_OK', 4);

/**
 * Normal file
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_S_IFREG', 32768);

/**
 * Character special file
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_S_IFCHR', 8192);

/**
 * Block special file
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_S_IFBLK', 24576);

/**
 * FIFO (named pipe) special file
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_S_IFIFO', 4096);

/**
 * Socket
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_S_IFSOCK', 49152);

/**
 * The maximum size of the process's address space in bytes. See also PHP's
 * memory_limit configuration
 * directive.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_AS', 9);

/**
 * The maximum size of a core file. If the limit is set to 0, no core file
 * will be generated.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_CORE', 4);

/**
 * The maximum amount of CPU time that the process can use, in seconds.
 * When the soft limit is hit, a SIGXCPU signal will be
 * sent, which can be caught with <b>pcntl_signal</b>.
 * Depending on the operating system, additional SIGXCPU
 * signals may be sent each second until the hard limit is hit, at which
 * point an uncatchable SIGKILL signal is sent.
 * See also <b>set_time_limit</b>.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_CPU', 0);

/**
 * The maximum size of the process's data segment, in bytes. It is
 * extremely unlikely that this will have any effect on the execution of
 * PHP unless an extension is in use that calls <b>brk</b> or
 * <b>sbrk</b>.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_DATA', 2);

/**
 * The maximum size of files that the process can create, in bytes.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_FSIZE', 1);

/**
 * The maximum number of locks that the process can create. This is only
 * supported on extremely old Linux kernels.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_LOCKS', 10);

/**
 * The maximum number of bytes that can be locked into memory.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_MEMLOCK', 8);

/**
 * The maximum number of bytes that can be allocated for POSIX message
 * queues. PHP does not ship with support for POSIX message queues, so this
 * limit will not have any effect unless you are using an extension that
 * implements that support.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_MSGQUEUE', 12);

/**
 * The maximum value to which the process can be
 * reniced to. The value
 * that will be used will be 20 - limit, as resource
 * limit values cannot be negative.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_NICE', 13);

/**
 * A value one greater than the maximum file descriptor number that can be
 * opened by this process.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_NOFILE', 7);

/**
 * The maximum number of processes (and/or threads, on some operating
 * systems) that can be created for the real user ID of the process.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_NPROC', 6);

/**
 * The maximum size of the process's resident set, in pages.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_RSS', 5);

/**
 * The maximum real time priority that can be set via the
 * <b>sched_setscheduler</b> and
 * <b>sched_setparam</b> system calls.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_RTPRIO', 14);

/**
 * The maximum amount of CPU time, in microseconds, that the process can
 * consume without making a blocking system call if it is using real time
 * scheduling.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_RTTIME', 15);

/**
 * The maximum number of signals that can be queued for the real user ID of
 * the process.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_SIGPENDING', 11);

/**
 * The maximum size of the process stack, in bytes.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_STACK', 3);

/**
 * Used to indicate an infinite value for a resource limit.
 * @link http://php.net/manual/en/posix.constants.php
 */
define ('POSIX_RLIMIT_INFINITY', -1);

// End of posix v.7.0.4-7ubuntu2
?>
